<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Index</title>
</head>
<body>
    <h1>Books List</h1>

    <!-- You can loop through the books here -->
    @if (isset($books) && $books->count())
        <ul>
            @foreach ($books as $book)
                <li>{{ $book->title }} by {{ $book->author }}</li>
            @endforeach
        </ul>
    @else
        <p>No books available.</p>
    @endif
</body>
</html>
