<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Display a listing of orders (Read)
    public function index()
    {
        $orders = Order::with('product')->get(); // Get orders with associated product
        return view('orders.index', compact('orders'));
    }

    // Show the form for creating a new order (Create)
    public function create()
    {
        $products = Product::all(); // Get all products for dropdown
        return view('orders.create', compact('products'));
    }

    // Store a newly created order in the database (Store)
    public function store(Request $request)
    {
        // Validate request
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric',
        ]);

        // Create a new order
        Order::create($validated);

        return redirect()->route('orders.index')->with('success', 'Order created successfully');
    }

    // Display the specified order (Show)
    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    // Show the form for editing the specified order (Edit)
    public function edit(Order $order)
    {
        $products = Product::all(); // Get all products for dropdown
        return view('orders.edit', compact('order', 'products'));
    }

    // Update the specified order in the database (Update)
    public function update(Request $request, Order $order)
    {
        // Validate request
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric',
        ]);

        // Update the order
        $order->update($validated);

        return redirect()->route('orders.index')->with('success', 'Order updated successfully');
    }

    // Remove the specified order from the database (Delete)
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully');
    }
}
