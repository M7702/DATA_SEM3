<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h1>Register</h1>
    <form action="{{ route('product.update',$product_edit->id) }}" method="POST">
    
        @csrf
        @method('PUT')
        
        <label for="product_name">Name:</label>
        <input type="text" id="product_name" name="product_name" value="{{ $product_edit->product_name }}">
        <br>
        <label for="product_quantity">Email:</label>
        <input type="number" id="product_quantity" name="product_quantity" value="{{ $product_edit->product_quantity }}">
        <br>
        
        <button type="submit">Update</button>
    </form>
</body>
</html>
