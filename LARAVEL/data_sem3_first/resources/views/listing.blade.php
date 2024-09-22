<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* th,td,tr{
            border: 1px solid black;
        } */
    </style>
</head>
<body>
<table>
    <tr>
        <th>name</th>
        <th>email</th>
        <th>password</th>
    </tr>
    @foreach ($users as $key =>$user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
    </tr>
    <!-- for add edit button -->
     <td><a href="{{ route('edit', ['edit_id' => $user->id]) }}">Edit</a></td> 
    <!-- for add delete button -->
     <td><a href="{{ route('delete',['delete_id' => $user->id]) }}">Delete</a></td>
    @endforeach
</table>
</body>
</html>
