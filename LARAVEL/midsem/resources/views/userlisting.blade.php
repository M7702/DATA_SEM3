<style>
        .alert {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
    </style>

    <!-- Check if there are any error messages -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<table>
  <tr>
    <th>name</th>
    <th>email</th>
    <th>password</th>
    <th>Edit</th>
    <th>Delete</th>

  </tr>
  @foreach($users as $user)
  <tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->password}}</td>
    <td></td>
    <td><a href="{{ route('edit', ['edit_id' => $user->id]) }}">Edit</a></td>
    <td><a href="{{ route('delete', ['delete_id' => $user->id]) }}">delete</a></td>
  </tr>
@endforeach
</table>
