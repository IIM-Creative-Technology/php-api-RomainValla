<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // Return a teacher
    public function getTeacher(Teacher $id_teacher)
    {
        return $id_teacher;
    }

    // Return all teachers
    public function getAllTeacher()
    {
        return response()->json(Teacher::all());
    }

    // Create teacher
    public function create()
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'start_year' =>  'required|date_format:Y'
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return Teacher::create($request->all());
    }

    // Update teacher
    public function update()
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'start_year' =>  'required|date_format:Y'
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        $teacher->update($request->all());
        return $teacher;
    }
}
