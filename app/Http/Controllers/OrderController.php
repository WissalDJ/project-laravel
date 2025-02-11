<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'courier_id' => 'required|exists:couriers,id',
            'partner_id' => 'required|exists:partners,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer',
            'status' => 'required|string|max:50',
        ]);

        Order::create($request->all());

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    // Les autres méthodes restent les mêmes...
}
