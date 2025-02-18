<?php
namespace App\Http\Controllers;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PartnersExport;
class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::latest()->paginate(10);
        return view('partners.index', compact('partners'));
    }
    public function create()
    {
        return view('partners.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'tel' => 'required|numeric|digits:10',
            'email' => 'required|string|email|max:255|unique:partners',
            'modepass' => 'required|string|min:8',
            'nomEntreprise' => 'required|string|max:255|regex:/^[A-Z]+$/',
            'adrees' => 'required|string|max:255',
            'imagmenu' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
            if ($request->hasFile('imagmenu')) {
            $validatedData['imagmenu'] = $request->file('imagmenu')->store('partners', 'public');
            }
            $validatedData['modepass'] = Hash::make($validatedData['modepass']);
            $partner = Partner::create($validatedData);
    
        return redirect()->route('partners.profile', $partner->id)->with('success', 'created  with successfully!');
    }
    public function show($id)
    {
        $partner = Partner::findOrFail($id);
        return view('partners.profile.show', compact('partner'));
    }
    public function editProfile($id)
    {
        $partner = Partner::findOrFail($id);
        return view('partners.profile.edit', compact('partner'));
    }
    public function update(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'tel' => 'required|numeric|digits:10',
            'email' => 'required|string|email|max:255|unique:partners,email,' . $id,
            'nomEntreprise' => 'required|string|max:255|regex:/^[A-Z]+$/',
            'adrees' => 'required|string|max:255',
            'imagmenu' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('imagmenu')) {
            if ($partner->imagmenu) {
                Storage::disk('public')->delete($partner->imagmenu);
            }
            $validatedData['imagmenu'] = $request->file('imagmenu')->store('partners', 'public');
        }
        $partner->update($validatedData);

        return redirect()->route('partners.profile', $partner->id)
            ->with('success', 'Profile updated successfully!');
    }
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        if ($partner->imagmenu) {
            Storage::disk('public')->delete($partner->imagmenu);
        }
        $partner->delete();
        return redirect()->route('partners.index')->with('success', 'Partner deleted successfully!');
    }
    public function generatePdf()
    {  
            $partners = Partner::all();
            $pdf = PDF::loadView('partners.pdf', compact('partners'));
            return $pdf->download('partner_report.pdf');
        
    }
    public function export()
    {
        return Excel::download(new PartnersExport, 'partners.xlsx');
    }

}