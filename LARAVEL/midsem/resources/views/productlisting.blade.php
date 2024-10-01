<!-- <table>
  <tr>
    <th>product</th>
    <th>quantity</th>
    
  </tr>

  @foreach ($products as $key => $user)
  <tr>
    <td>{{$user->product_name}}</td>
    <td>{{$user->product_quantity}}</td>
    
  </tr>
  
@endforeach
</table> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse; /* Ensures borders are merged */
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000; /* Border for cells */
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2; /* Light background for header */
        }
    </style>
</head>
<body>

<h1>Product List</h1>

<table>
    <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    @foreach ($products as $user)
    <tr>
        <td>{{ $user->product_name }}</td>
        <td>{{ $user->product_quantity }}</td>
        <td>
      <a href="{{ route('product.show', $user->id) }}" class="btn btn-info">View</a>
      </td>
    <td><a href="{{ route('product.edit', $user->id) }}" class="btn btn-info">Edit</a></td>
    <td>
    <form action="{{ route('product.destroy', $user->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</td>
    </tr>
    @endforeach
</table>

</body>
</html>

