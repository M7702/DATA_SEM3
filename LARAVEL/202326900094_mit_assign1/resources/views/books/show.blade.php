<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }}</title>
</head>
<body>
    <h1>{{ $book->title }}</h1>
    <p>Author: {{ $book->author }}</p>
    <p>Year Published: {{ $book->year_published }}</p>
    <p>Description: {{ $book->description }}</p>

    <a href="{{ route('books.index') }}">Back to List</a>
</body>
</html>
