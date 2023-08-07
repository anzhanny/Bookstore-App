<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lecturerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\KhsController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\CostController;
use App\Http\Controllers\DetailsubjectController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InformationController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // return Redirect::to('login');
});

Route::get('/lecturer',[lecturerController::class,'index']);
Route::get('/add-lecturer', [lecturerController::class, 'create']);
Route::post('/lecturer/store',[lecturerController::class, 'store']);
Route::get('/lecturer/{id}',[lecturerController::class, 'edit']);
Route::patch('/lecturer/update/{id}',[lecturerController::class, 'update']);
Route::get('/lecturer/delete/{id}', [lecturerController::class,'destroy']);

Route::get('/student',[StudentController::class,'index']);
Route::get('/add-student', [StudentController::class, 'create']);
Route::post('/student/store',[StudentController::class, 'store']);
Route::get('/student/{id}', [StudentController::class, 'edit']);
Route::patch('/student/update/{id}', [StudentController::class,'update']);
Route::get('/student/delete/{id}', [StudentController::class,'destroy']);

Route::get('/subject',[SubjectController::class,'index']);
Route::get('/add-subject', [SubjectController::class, 'create']);
Route::post('/subject/store',[SubjectController::class, 'store']);
Route::get('/subject/{id}',[SubjectController::class, 'edit']);
Route::patch('/subject/update/{id}',[SubjectController::class, 'update']);
Route::get('/subject/delete/{id}', [SubjectController::class,'destroy']);


Route::get('/schedule',[ScheduleController::class,'index']);
Route::get('/add-schedule', [ScheduleController::class, 'create']);
Route::post('/schedule/store',[ScheduleController::class, 'store']);
Route::get('/schedule/{id}',[ScheduleController::class, 'edit']);
Route::patch('/schedule/update/{id}',[ScheduleController::class, 'update']);
Route::get('/schedule/delete/{id}', [ScheduleController::class,'destroy']);


Route::get('/khs',[KhsController::class,'index']);
Route::get('/add-khs', [KhsController::class, 'create']);
Route::post('/khs/store',[KhsController::class, 'store']);
Route::get('/khs/{id}',[KhsController::class, 'edit']);
Route::patch('/khs/update/{id}',[KhsController::class, 'update']);
Route::get('/khs/delete/{id}', [KhsController::class,'destroy']);


Route::get('/krs',[KrsController::class,'index']);
Route::get('/add-krs', [KrsController::class, 'create']);
Route::post('/krs/store',[KrsController::class, 'store']);
Route::get('/krs/{id}',[KrsController::class, 'edit']);
Route::patch('/krs/update/{id}',[KrsController::class, 'update']);
Route::get('/krs/delete/{id}', [KrsController::class,'destroy']);


Route::get('/major',[MajorController::class,'index']);
Route::get('/add-major', [MajorController::class, 'create']);
Route::post('/major/store',[MajorController::class, 'store']);
Route::get('/major/{id}',[MajorController::class, 'edit']);
Route::patch('/major/update/{id}',[MajorController::class, 'update']);
Route::get('/major/delete/{id}', [MajorController::class,'destroy']);


Route::get('/room',[RoomController::class,'index']);
Route::get('/add-room', [RoomController::class, 'create']);
Route::post('/room/store',[RoomController::class, 'store']);
Route::get('/room/{id}',[RoomController::class, 'edit']);
Route::patch('/room/update/{id}',[RoomController::class, 'update']);
Route::get('/room/delete/{id}', [RoomController::class,'destroy']);


Route::get('/faculty',[FacultyController::class,'index']);
Route::get('/add-faculty', [FacultyController::class, 'create']);
Route::post('/faculty/store',[FacultyController::class, 'store']);
Route::get('/faculty/{id}',[FacultyController::class, 'edit']);
Route::patch('/faculty/update/{id}',[FacultyController::class, 'update']);
Route::get('/faculty/delete/{id}', [FacultyController::class,'destroy']);

Route::get('/ukm',[UkmController::class,'index']);
Route::get('/add-ukm', [UkmController::class, 'create']);
Route::post('/ukm/store',[UkmController::class, 'store']);
Route::get('/ukm/{id}', [UkmController::class, 'edit']);
Route::patch('/ukm/update/{id}', [UkmController::class,'update']);
Route::get('/ukm/delete/{id}', [UkmController::class,'destroy']);

Route::get('/academic',[AcademicController::class,'index']);
Route::get('/add-academic', [AcademicController::class, 'create']);
Route::post('/academic/store',[AcademicController::class, 'store']);
Route::get('/academic/{id}', [AcademicController::class, 'edit']);
Route::patch('/academic/update/{id}', [AcademicController::class,'update']);
Route::get('/academic/delete/{id}', [AcademicController::class,'destroy']);

Route::get('/cost',[CostController::class,'index']);
Route::get('/add-cost', [CostController::class, 'create']);
Route::post('/cost/store',[CostController::class, 'store']);
Route::get('/cost/{id}', [CostController::class, 'edit']);
Route::patch('/cost/update/{id}', [CostController::class,'update']);
Route::get('/cost/delete/{id}', [CostController::class,'destroy']);

Route::get('/detailsubject',[DetailsubjectController::class,'index']);
Route::get('/add-detailsubject', [DetailsubjectController::class, 'create']);
Route::post('/detailsubject/store',[DetailsubjectController::class, 'store']);
Route::get('/detailsubject/{id}', [DetailsubjectController::class, 'edit']);
Route::patch('/detailsubject/update/{id}', [DetailsubjectController::class,'update']);
Route::get('/detailsubject/delete/{id}', [DetailsubjectController::class,'destroy']);

Route::get('/employee',[EmployeeController::class,'index']);
Route::get('/add-employee', [EmployeeController::class, 'create']);
Route::post('/employee/store',[EmployeeController::class, 'store']);
Route::get('/employee/{id}', [EmployeeController::class, 'edit']);
Route::patch('/employee/update/{id}', [EmployeeController::class,'update']);
Route::get('/employee/delete/{id}', [EmployeeController::class,'destroy']);

Route::get('/information',[InformationController::class,'index']);
Route::get('/add-information', [InformationController::class, 'create']);
Route::post('/information/store',[InformationController::class, 'store']);
Route::get('/information/{id}', [InformationController::class, 'edit']);
Route::patch('/information/update/{id}', [InformationController::class,'update']);
Route::get('/information/delete/{id}', [InformationController::class,'destroy']);




//Route::resource('photos', PhotoController::class);
