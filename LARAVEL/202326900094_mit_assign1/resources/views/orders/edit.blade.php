@extends('layouts.app')

@section('content')
    <h1>Edit Order</h1>

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="product_id">Select Product</label>
            <select name="product_id" class="form-control" id="product_id" required>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}" {{ old('product_id', $order->product_id) == $product->id ? 'selected' : '' }}>
                        {{ $product->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" id="quantity" value="{{ old('quantity', $order->quantity) }}" required>
        </div>

        <div class="form-group">
            <label for="total_price">Total Price</label>
            <input type="number" step="0.01" name="total_price" class="form-control" id="total_price" value="{{ old('total_price', $order->total_price) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Order</button>
    </form>
@endsection
