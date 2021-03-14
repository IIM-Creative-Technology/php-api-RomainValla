<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

    Route::group([

        'middleware' => 'api',
        'prefix' => 'auth'

    ], function ($router) {

        Route::post('/login', [AuthController::class, 'login']);
        Route::post('/logout', [AuthController::class, 'logout']);

    });

    Route::middleware('jwt.auth')->group(function(){

/*
|--------------------------------------------------------------------------
| Routes : Classes
|--------------------------------------------------------------------------
*/

    Route::get('/classes', [ClasseController::class, 'getAllClasses']);
    Route::post('/classes', [ClasseController::class, 'create']);
    Route::put('/classes/{classe}', [ClasseController::class, 'update']);
    Route::get('/classes/{name}', [StudentController::class, 'getStudentsByClass']);

/*
|--------------------------------------------------------------------------
| Routes : Students
|--------------------------------------------------------------------------
*/

    Route::get('/students/{id_student}', [StudentController::class, 'getStudent']);
    Route::get('/students', [StudentController::class, 'getAllStudents']);
    Route::post('/students', [StudentController::class, 'create']);
    Route::put('/students/{id_student}', [StudentController::class, 'update']);
    Route::delete('/students', [StudentController::class, 'delete']);
    Route::get('/students/grades/{id_student}', [GradeController::class, 'getGrades']);

/*
|--------------------------------------------------------------------------
| Routes : Courses
|--------------------------------------------------------------------------
*/

    Route::get('/courses/{id_course}', [CourseController::class, 'getCourse']);
    Route::get('/courses', [CourseController::class, 'getAllCourses']);
    Route::post('/courses', [CourseController::class, 'create']);
    Route::put('/courses/{id_course}', [CourseController::class, 'update']);

/*
|--------------------------------------------------------------------------
| Routes : Grades
|--------------------------------------------------------------------------
*/

    Route::post('/grades', [GradeController::class, 'create']);

/*
|--------------------------------------------------------------------------
| Routes : Teachers
|--------------------------------------------------------------------------
*/

    Route::get('/teachers/{id_teacher}', [TeacherController::class, 'getTeacher']);
    Route::get('/teachers', [TeacherController::class, 'getAllTeacher']);
    Route::post('/teachers', [TeacherController::class, 'create']);
    Route::put('/teachers/{id_teacher}', [TeacherController::class, 'update']);

});