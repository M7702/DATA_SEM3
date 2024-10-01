<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h1>Register</h1>
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <label for="product_name">Product:</label>
        <input type="text" id="product_name" name="product_name" required>
        <br>
        <label for="product_quantity">Quantity:</label>
        <input type="text" id="product_quantity" name="product_quantity" required>
        <br>
        
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
