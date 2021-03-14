<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Grade;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    // Return students grades
    public function getGrades($id_student)
    {
        $grade = DB::table('grades')
            ->select('students.id', 'students.first_name', 'students.last_name', 'courses.name', 'grades.grade')
            ->join('students', 'students.id', '=', 'grades.id_student')
            ->join('courses', 'courses.id', '=', 'grades.id_course')
            ->where('students.id', $id_student)
            ->get();

        return $grade;
    }

    // Create grade for students
    public function create(Request $request)
    {
        $validor = Validator::make($request->all(), [
            'id_student' => 'required|exists:students,id',
            'id_course' => 'required|exists:courses.id',
            'grade' => 'required|numeric|min:0|lte:20'
        ]);

        if ($validor->fails()) {
            return $validor->errors();
        }

        return Grade::create($request->all());
    }
}
