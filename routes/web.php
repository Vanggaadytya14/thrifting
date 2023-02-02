<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

route::get('/register',[RegisterController::class,'indexregister']);
route::post('/register',[RegisterController::class,'store']);

route::get('/index',[IndexController::class,'index'])->middleware('checkRole:user');
route::get('/notif',[IndexController::class,'notif']);

route::get('/login',[LoginController::class,'indexlogin']);
route::post('/login',[LoginController::class,'authenticate']);

route::get('/dashboard',[DashboardController::class,'index'])->middleware('checkRole:admin');

Route::get('/categoryshow', [CategoryController::class, 'categoryshow'])->middleware('checkRole:admin');
Route::post('/categorypost', [CategoryController::class, 'categorystore'])->middleware('checkRole:admin');
Route::put('/categoryupdate/{id}', [CategoryController::class, 'categoryupdate'])->middleware('checkRole:admin');
Route::get('/categorydelete/{id}', [CategoryController::class, 'delete'])->middleware('checkRole:admin');

route::get('/logout',[LoginController::class,'logout']);

//CRUD Admin
Route::get('/adminshow', [AdminController::class, 'adminshow'])->middleware('checkRole:admin');

Route::get('/adminadd', [AdminController::class, 'adminadd'])->middleware('checkRole:admin');
Route::post('/adminpost', [AdminController::class, 'adminstore'])->middleware('checkRole:admin');

Route::get('/adminedit/{id}', [AdminController::class, 'adminedit'])->middleware('checkRole:admin');
Route::put('/adminupdate/{id}', [AdminController::class, 'adminupdate'])->middleware('checkRole:admin');

Route::get('/admindelete/{id}', [AdminController::class, 'admindelete'])->middleware('checkRole:admin');

// Admin -> User
Route::get('/usershow', [UserController::class, 'usershow'])->middleware('checkRole:admin');
Route::get('/useradd', [UserController::class, 'useradd'])->middleware('checkRole:admin');
Route::get('/useredit/{id}', [UserController::class, 'useredit'])->middleware('checkRole:admin');
Route::put('/userupdate/{id}', [UserController::class, 'userupdate'])->middleware('checkRole:admin');
Route::get('/userdelete/{id}', [UserController::class, 'userdelete'])->middleware('checkRole:admin');
Route::get('/verify', [LoginController::class, 'verify'])->middleware('checkRole:admin');
Route::get('/block', [LoginController::class, 'block'])->middleware('checkRole:admin');

route::get('/home',[IndexController::class,'home']);


