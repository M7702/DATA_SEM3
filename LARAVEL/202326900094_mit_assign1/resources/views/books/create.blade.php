<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
</head>
<body>
    <h1>Add a New Book</h1>

    <!-- The form to add a new book -->
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required><br><br>

        <label for="year_published">Year Published:</label>
        <input type="number" id="year_published" name="year_published" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50"></textarea><br><br>

        <button type="submit">Add Book</button>
    </form>
</body>
</html>
