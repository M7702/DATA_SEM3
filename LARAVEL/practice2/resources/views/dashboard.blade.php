<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if (isset($alert_type) && isset($message))
            <h1>{{$alert_type}}</h1>
            <h2>{{$message}}</h2>
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-bold mb-4">Student List</h3>
                    <table class="table-auto w-full border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border border-gray-300 px-4 py-2">ID</th>
                                <th class="border border-gray-300 px-4 py-2">Name</th>
                                <th class="border border-gray-300 px-4 py-2">Email</th>
                                <th class="border border-gray-300 px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $student)
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">{{ $student->stu_id }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $student->stu_name }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $student->stu_email }}</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <a href="{{ route('students.edit', $student->stu_id) }}" class="text-blue-500">Edit</a>
                                        |
                                        <form action="{{ route('students.destroy', $student->stu_id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center border border-gray-300 px-4 py-2">No students found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
