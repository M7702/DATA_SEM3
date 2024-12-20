<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Student</h2>
    <form action="{{ route('students.update', $student->stu_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="stu_id" class="form-label">Student ID</label>
            <input type="text" class="form-control" id="stu_id" name="stu_id" value="{{ $student->stu_id }}" readonly>
        </div>
        <div class="mb-3">
            <label for="stu_name" class="form-label">Student Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name" value="{{ $student->stu_name }}" required>
        </div>
        <div class="mb-3">
            <label for="stu_email" class="form-label">Student Email</label>
            <input type="email" class="form-control" id="stu_email" name="stu_email" value="{{ $student->stu_email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Student</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
