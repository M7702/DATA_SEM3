<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit {{ $book->title }}</title>
</head>
<body>
    <h1>Edit Book: {{ $book->title }}</h1>

    <!-- The form to update the book -->
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- This specifies it's a PUT request for updating -->
        
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $book->title }}" required><br><br>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" value="{{ $book->author }}" required><br><br>

        <label for="year_published">Year Published:</label>
        <input type="number" id="year_published" name="year_published" value="{{ $book->year_published }}" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50">{{ $book->description }}</textarea><br><br>

        <button type="submit">Update Book</button>
    </form>

    <a href="{{ route('books.index') }}">Back to List</a>
</body>
</html>
