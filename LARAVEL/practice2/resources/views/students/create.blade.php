<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Add Student</h2>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="stu_id" class="form-label">Student ID</label>
            <input type="text" class="form-control" id="stu_id" name="stu_id" required>
        </div>
        <div class="mb-3">
            <label for="stu_name" class="form-label">Student Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name" required>
        </div>
        <div class="mb-3">
            <label for="stu_email" class="form-label">Student Email</label>
            <input type="email" class="form-control" id="stu_email" name="stu_email" required>
        </div>
        <button type="submit" class="btn btn-success">Add Student</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
