<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

// Example Routes
Route::view('/', 'auth/login');
Route::view('/login', 'auth/login');
Route::view('/signup', 'auth/signup');
// Route::match(['get', 'post'], '/dashboard', function(){
//     return view('dashboard');
// });
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');


Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login-user', [AuthController::class, 'loginUser'])->name('login_user'); 
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register-user', [AuthController::class, 'registerUser'])->name('register_user'); 
Route::get('logout', [AuthController::class, 'logOut'])->name('logout');