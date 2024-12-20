<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
    @if (isset($messege))
    <div class="alert alert-{{ $alert_type ?? 'info' }} alert-dismissible fade show" role="alert">
        {{ $messege }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif



        <script>
            var alertList = document.querySelectorAll(".alert");
            alertList.forEach(function(alert) {
                new bootstrap.Alert(alert);
            });
        </script>

        <h2>Student List</h2>
        <a href="{{ route('students.create') }}" class="btn btn-success mb-3">Add Student</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                <tr>
                    <td>{{ $student->stu_id }}</td>
                    <td>{{ $student->stu_name }}</td>
                    <td>{{ $student->stu_email }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student->stu_id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('students.destroy', $student->stu_id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">No students found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>