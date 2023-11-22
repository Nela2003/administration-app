<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\UserController;
use App\Models\Departament;

use App\Htpp\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

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
});//

Route::get('/departmentUsers/{department_id}',[DepartamentController::class,'departmentUsers'])->name('departmentUsers');

Route::get('/editUsers/{id}',[UserController::class,'editUsers'])->name('editUsers');
Route::post('/add',[UserController::class,'add'])->name('add');

Route::get('/deleteUsers/{id}',[UserController::class,'deleteUsers'])->name('deleteUsers');
Route::get('/depart',[UserController::class,'depart'])->name('depart');
Route::get('/form',[UserController::class,'form'])->name('form');
Route::post('/insertUsers',[UserController::class,'insertUsers'])->name('insertUsers');
Route::get('/insert',[DepartamentController::class,'addEmployees']);
Route::get('/update/{updateUser}',[DepartamentController::class,'updateEmployees'])->name('users.update');
Route::post('/save',[UserController::class,'save_user'])->name('users.save');


//
Route::get('/edit_depart/{id}',[DepartamentController::class,'editDepartments'])->name('edit');
Route::post('/save_depart',[DepartamentController::class,'save_depart'])->name('savedepart');
Route::get('/form_depart',[DepartamentController::class,'form_depart'])->name('form_depart');

Route::get('/deleteDepartment/{id}',[DepartamentController::class,'deleteDepartment'])->name('deleteDepartment');

// routes/web.php

Route::get('/admin',[UserController::class,'ad'])->middleware('isAdmin');
Route::get('/kodi',[DepartamentController::class,'index'])->name('kodi');
Route::post('/userDashboard/{id}',[UserController::class,'user1'])->name('user.dashboard');




//

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');