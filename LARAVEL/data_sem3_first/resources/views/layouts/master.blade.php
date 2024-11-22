<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','your application')</title>
</head>
<body>
    <header>
        <p>your header</p>
    </header>
    @yield('content')
    <footer>
        <p>your footer</p>
    </footer>
</body>
</html>