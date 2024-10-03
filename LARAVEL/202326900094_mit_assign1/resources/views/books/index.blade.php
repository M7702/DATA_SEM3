<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
</head>
<body>
    <h1>Books List</h1>

    @if ($books->count())
        <ul>
            @foreach ($books as $book)
                <li>
                    {{ $book->title }} by {{ $book->author }} ({{ $book->year_published }})
                    
                    <!-- Links to show, edit, and delete a book -->
                    <a href="{{ route('books.show', $book->id) }}">View</a>
                    <a href="{{ route('books.edit', $book->id) }}">Edit</a>

                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>No books found.</p>
    @endif

    <a href="{{ route('books.create') }}">Add New Book</a>
</body>
</html>
