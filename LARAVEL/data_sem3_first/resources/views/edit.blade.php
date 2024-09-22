<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>

    <form action="{{ route('editdata') }}" method="POST">
        @csrf  <!-- Laravel security feature to prevent CSRF attacks -->
        <input type="hidden" name="id" value="{{ $edituserdata->id }}">  <!-- Hidden input to store user ID -->

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $edituserdata->name }}" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $edituserdata->email }}" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="{{ $edituserdata->password }} " required>
        <br><br>

        <input type="submit" value="Update User">
    </form>

</body>
</html>
