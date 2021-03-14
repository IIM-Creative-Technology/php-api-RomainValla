<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Return a course
    public function getCourse(Course $course)
    {
        return $course;
    }

    // Return all courses
    public function getAllCourses()
    {
        return response()->json(Course::all());
    }

    // Create new course
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'start_date' => 'required|date_format:Y-m-d',
            'end_date' => 'required|date_format:Y-m-d|after:start_date',
            'id_year' => 'required|exists:classes,id',
            'id_teacher' => 'required|exists:teachers,id'
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return Course::create($request->all());
    }

    // Update a course
    public function update(Request $request, Course $course)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'start_date' => 'required|date_format:Y-m-d',
            'end_date' => 'required|date_format:Y-m-d|after:start_date',
            'id_year' => 'required|exists:classes,id',
            'id_teacher' => 'required|exists:teachers,id'
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        $course->update($request->all());
        return $course;
    }
}
