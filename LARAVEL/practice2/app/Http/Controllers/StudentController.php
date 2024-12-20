<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
{
    $students = Student::all();
    $alert_type = null;
    $message = null;
    return view('dashboard', compact('students','alert_type','message'));
}


    public function create()
    {
        return view('students.create'); // Return a view for creating a student
    }

    public function store(Request $request)
    {
        $request->validate([
            'stu_id' => 'required|unique:students,stu_id',
            'stu_name' => 'required',
            'stu_email' => 'required|email|unique:students,stu_email',
        ]);

        Student::create($request->all());
        $students = Student::all();

        return view('students.index',compact('students'))->with('alert_type','success')->with('messege','student created successfully');
    }

    public function show($stu_id)
    {
        $student = Student::find($stu_id);

        if (!$student) {
            return response()->json(['message' => 'Student not found.'], 404);
        }

        return redirect()->route('students.index')->with('alert_type','success')->with('messege','student created successfully');
    }

    public function edit($stu_id)
    {
        $student = Student::find($stu_id);

        if (!$student) {
            return response()->json(['message' => 'Student not found.'], 404);
        }

        return view('students.edit', compact('student')); // Return a view for editing
    }

    public function update(Request $request, $stu_id)
    {
        $student = Student::find($stu_id);

        if (!$student) {
            return response()->json(['message' => 'Student not found.'], 404);
        }

        $request->validate([
            'stu_name' => 'required',
            'stu_email' => 'required|email|unique:students,stu_email,' . $stu_id . ',stu_id',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('alert_type','success')->with('messege','student created successfully');
    }

    public function destroy($stu_id)
    {
        $student = Student::find($stu_id);

        if (!$student) {
            return response()->json(['message' => 'Student not found.'], 404);
        }

        $student->delete();
        $students = Student::all();
        return view('students.index',compact('students'))->with('alert_type','success')->with('messege','student created successfully');
    }
}
