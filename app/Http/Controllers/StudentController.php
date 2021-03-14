<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    // Return a student
    public function getStudent(Student $id_student)
    {
        return $id_student;
    }

    // Return all students
    public function getAllStudents()
    {
        return response()->json(Student::all());
    }

    // Return all students by class
    public function getStudentsByClass($name)
    {
        $students = DB::table('students')
            ->select('students.id', 'students.first_name', 'students.last_name')
            ->join('classes', 'students.id_year', '=', 'classes.id')
            ->where('classes.name', $name)
            ->get();

        return $students;
    }

    // Create new student
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'age' => 'required|integer',
            'start_year' => 'required|date_format:Y',
            'id_year' => 'required|exists:classes,id'
        ]);
        if($validator->fails()){
            return $validator->errors();
        }
        return Student::create($request->all());
    }

    // Update student
    public function update(Request $request, Student $student)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'age' => 'required|integer',
            'start_year' => 'required|date_format:Y',
            'id_year' => 'required|exists:classes,id'
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        $student->update($request->all());
        return $student;
    }

    // Delete student
    public function delete(Student $student)
    {
        $student->delete();
        return $student;
    }
}
