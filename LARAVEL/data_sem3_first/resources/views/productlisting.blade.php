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
    </tr>
    @endforeach

</table>