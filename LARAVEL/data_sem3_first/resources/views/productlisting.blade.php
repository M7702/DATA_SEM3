<table>
    <tr>
        <th>product</th>
        <th>quantity</th>
        <th>view</th>
    </tr>


    @foreach ($products as  $user)

    <tr>
        <td>{{$user -> name}}</td>
        <td>{{$user -> quantity}}</td>
        <td>
            <a href="{{ route('product.show',$user-> id)}}"> View</a>
        </td>
    </tr>
    @endforeach

</table>