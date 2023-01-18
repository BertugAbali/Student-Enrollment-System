<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UFPclassController;

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

Route::get('/', [HomeController::class,'index']);
Route::get('/students', [HomeController::class,'index']);
Route::get('/classes', [HomeController::class,'allClasses']);
Route::post('enroll/{student}', [HomeController::class, 'enroll']);
Route::get('/student/create', [HomeController::class,'createStudent']);
Route::get('/class/create', [HomeController::class,'createClass']);
Route::post('/class/show/{class}', [HomeController::class, 'enrolledStudents']);

Route::post('/student/created', [StudentController::class,'create'])->name('create.student');
Route::post('/student/edit/{student}', [StudentController::class, 'edit']);
Route::post('/student/update/{student}', [StudentController::class, 'update']);
Route::post('/student/enroll/{student}', [StudentController::class, 'enroll']);
Route::post('/student/destroy/{student}', [StudentController::class, 'destroy'])->name('destroy.student');

Route::post('/class/created', [UFPclassController::class,'create'])->name('create.class');
Route::post('/class/edit/{class}', [UFPclassController::class, 'edit']);
Route::post('/class/update/{class}', [UFPclassController::class, 'update']);
Route::post('/class/destroy/{class}', [UFPclassController::class, 'destroy'])->name('destroy.class');