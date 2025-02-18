<?php
namespace App\Http\Controllers;

use App\Models\Courier;
use App\Models\Partner;
use Illuminate\Http\Request;
class CourierController extends Controller
{
    public function index()
    {
        $couriers = Courier::paginate(10); 
        return view('couriers.index', compact('couriers'));
    }
    public function create()
    {
        $partners = Partner::all();
        return view('couriers.create', compact('partners'));
    }
    public function show($id)
    {
        $courier = Courier::findOrFail($id);
        $otherCouriers = Courier::where('id', '!=', $id)->get();
        return view('couriers.profile', compact('courier', 'otherCouriers'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'partner_id' => 'required|exists:partners,id',
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'tel' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:couriers',
            'annee_experience' => 'required|integer',
        ]);
        $courier = Courier::create($request->all());
        return redirect()->route('couriers.profile', $courier->id)->with('success', 'Courier created successfully.');
    }
    public function profile()
    {
        $courier = auth()->user(); 
        return view('couriers.profile', compact('courier'));
    }
    public function edit(Courier $courier)
    {
        $partners = Partner::all();
        return view('couriers.edit', compact('courier', 'partners'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'partner_id' => 'required',
            'name' => 'required',
            'prenom' => 'required',
            'tel' => 'required',
            'email' => 'required|email',
            'annee_experience' => 'required|integer',
        ]);
        $courier = Courier::findOrFail($id);
        $courier->update($request->all());
        return redirect()->route('couriers.show', $courier->id)->with('success', 'Courier updated successfully.');
    }
    public function destroy($id)
    {
        $courier = Courier::findOrFail($id);
        $courier->delete();
        return redirect()->route('couriers.index')->with('success', 'Courier deleted successfully.');
    }
}