<?php

namespace App\Http\Controllers;

use App\Models\Courier;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    public function index()
    {
        $couriers = Courier::all();
        return view('couriers.index', compact('couriers'));
    }

    public function create()
    {
        return view('couriers.create');
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

        Courier::create($request->all());

        return redirect()->route('couriers.index')->with('success', 'Courier created successfully.');
    }

    // Les autres méthodes restent les mêmes...
}
