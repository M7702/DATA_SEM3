<table>
    <tr>
        <th>product</th>
        <th>quantity</th>
        <th>view</th>
    </tr>

    @foreach ($products as  $product)
    <tr>
        <td>{{$product -> name}}</td>
        <td>{{$product -> quantity}}</td>
    </tr>
    @endforeach

</table>