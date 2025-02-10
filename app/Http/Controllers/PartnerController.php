<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::all();
        return view('partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'tel' => 'required|numeric|digits:10',
            'email' => 'required|string|email|max:255|unique:partners',
            'modepass' => 'required|string|min:8',
            'nomEntreprise' => 'required|string|max:255|regex:/^[A-Z]+$/',
            'adrees' => 'required|string|max:255',
            'imagmenu' => 'required|image',
        ]);
    
        $partner = new Partner($request->all());
    
        if ($request->hasFile('imagmenu')) {
            $partner->imagmenu = $request->file('imagmenu')->store('images', 'public');
        }
    
        $partner->save();
    
        return redirect()->route('partners.index')->with('success', 'Partner created successfully.');
    }
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'tel' => 'required|numeric|digits:10',
            'email' => 'required|string|email|max:255|unique:partners',
            'modepass' => 'required|string|min:8',
            'nomEntreprise' => 'required|string|max:255|regex:/^[A-Z]+$/',
            'adrees' => 'required|string|max:255',
            'imagmenu' => 'required|image',
        ]);

        $partner = Partner::findOrFail($id);
        $partner->fill($request->all());

        if ($request->hasFile('imagmenu')) {
            $partner->imagmenu = $request->file('imagmenu')->store('images', 'public');
        }

        $partner->save();

        return redirect()->route('partners.index')->with('success', 'Partner updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();
        return redirect()->route('partners.index')->with('success', 'Partner deleted successfully.');
    }
}
