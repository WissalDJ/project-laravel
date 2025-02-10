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
        return view('partners.create', compact('partners'));
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
            'tel' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:partners',
            'modepass' => 'required|string|min:8',
            'nomEntreprise' => 'required|string|max:255',
            'adrees' => 'required|string|max:255',
            'imagmenu' => 'required|image',
        ]);

        $partner = new Partner($request->all());

        if ($request->hasFile('imagmenu')) {
            $partner->imagmenu = $request->file('imagmenu')->store('images', 'public');
        }

        $partner->save();

        return redirect()->route('home')->with('success', 'Partner created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
