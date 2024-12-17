@extends('layouts.app')


@section('title', 'Orders List')

@section('content')
    <h1>Orders List</h1>

    <!-- Check if there are any orders -->
    @if($orders->isEmpty())
        <p>No orders found!</p>
    @else
        <!-- Display orders in a table format -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->product->name }}</td> <!-- This fetches the product name -->
                        <td>{{ $order->quantity }}</td>
                        <td>${{ $order->total_price }}</td>
                        <td>
                            <!-- Action buttons -->
                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-sm btn-warning">Edit</a>

                            <!-- Delete form -->
                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <!-- Link to create a new order -->
    <a href="{{ route('orders.create') }}" class="btn btn-primary">Create New Order</a>
@endsection
