<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h1>Register</h1>
    <form action="{{ route('editdata') }}" method="POST">
        @csrf
        <!-- Hidden input field for ID -->
        <input type="hidden" name="id" value="{{ $edituserdata->id }}">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{$edituserdata->name}}" required >
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{$edituserdata->email}}" required >
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="{{$edituserdata->password}}" required>
        <!-- required is used to fill mandatory values in html -->
        <br>
        
        <button type="submit">Register</button>
    </form>
</body>
</html>
