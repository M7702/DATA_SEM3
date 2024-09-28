<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('product_store') }}" method="POST">
        @csrf
        <label for="product_name">Product name:</label>
        <input type="text" id="product_name" name="product_name" required>
        <br>
        <label for="product_quantity">Product quantity</label>
        <input type="text" name="product_quantity" id="product_quantity">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>