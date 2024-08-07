<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

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
    return view('admin.dashboard');
})->name('dashboard');


// CRUD NEW 

Route::get('list-new', [NewsController::class, 'index'])->name('list-new');
Route::get('/filter-new', [NewsController::class, 'filter'])->name('filter-new');

Route::get('/add-new', [NewsController::class, 'create'])->name('add-new');
Route::post('/store-new', [NewsController::class, 'store'])->name('store-new');

Route::get('/edit-new', [NewsController::class, 'edit'])->name('edit-new');
Route::put('update/{id}', [NewsController::class, 'update']);

Route::delete('/delete-new/{id}', [NewsController::class, 'destroy'])->name('delete-new');


// CRUD USER 
Route::get('/list-user', [UserController::class, 'index'])->name('list-user');
Route::get('/filter-user', [UserController::class, 'filter'])->name('filter-user');

Route::get('add-user', [UserController::class, 'create'])->name('add-user');
Route::post('/store-user', [UserController::class, 'store'])->name('store-user');

Route::get('update-user/{id}', [UserController::class, 'edit',])->name('update-user');
Route::put('update-store/{id}', [UserController::class, 'update'])->name('update-store');

Route::delete('/delete-user/{id}', [UserController::class, 'destroy'])->name('delete-user');







// CRUD Category
Route::get('/list-category', [CategoryController::class, 'index'])->name('list-category');
Route::get('/filter-category', [CategoryController::class, 'filter'])->name('filter-category');

Route::get('add-category', [CategoryController::class, 'create'])->name('add-category');
Route::post('/store-category', [CategoryController::class, 'store'])->name('store-category');

Route::get('update-category/{id}', [CategoryController::class, 'edit'])->name('update-category');
Route::put('update/{id}', [CategoryController::class, 'update']);

Route::delete('/delete-category/{id}', [CategoryController::class, 'destroy'])->name('delete-category');



// Login , Logout 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);


Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);





Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/detail-new/{id}', [HomeController::class, 'show'])->name('detail-new');
Route::get('/categories-new/{id}', [HomeController::class, 'show'])->name('detail-new');




Route::get('dashboard', [AdminController::class, 'index'])
    ->name('admin.dashboard')
    ->middleware(['auth', 'is_admin']);
