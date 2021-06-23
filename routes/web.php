<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin/admin');
});


//--------------------------------
Route::get('/admin/student', function () {
    return view('student/form');
});

Route::get('/admin/teacher', function () {
    return view('teacher/form');
});

//-----------------------------------
//Route::get('/admin/student/create', [StudentController::class, 'create'] );
//Route::get('/admin/student/update', [StudentController::class, 'update'] );
//Route::get('/admin/student/delete', [StudentController::class, 'delete'] );
//Route::get('/admin/student/showlist', [StudentController::class, 'showList'] );

Route::get('/admin/student/create', function () {
    return view('student/create');
});
Route::get('/admin/student/update', function () {
    return view('student/update');
});
Route::get('/admin/student/delete', function () {
    return view('student/delete');
});
Route::get('/admin/student/showlist', function () {
    return view('student/list');
});


//Route::get('/admin/teacher/create', [TeacherController::class, 'create'] );
//Route::get('/admin/teacher/update', [TeacherController::class, 'update'] );
//Route::get('/admin/teacher/delete', [TeacherController::class, 'delete'] );
//Route::get('/admin/teacher/showlist', [TeacherController::class, 'showList'] );

Route::get('/admin/teacher/create', function () {
    return view('teacher/create');
});
Route::get('/admin/teacher/update', function () {
    return view('teacher/update');
});
Route::get('/admin/teacher/delete', function () {
    return view('teacher/delete');
});
Route::get('/admin/teacher/showlist', function () {
    return view('teacher/list');
});

