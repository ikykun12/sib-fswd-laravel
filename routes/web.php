<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use App\Models\Slider;

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

//GET 
// Dashboard
Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//Slider
Route::get('/slider', [SliderController::class, 'index'])->name('slider.index'); 
Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create'); 
Route::get('/slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit'); 
// Brand
Route::get('/brand', [BrandController::class, 'index'])->name('brand.index'); 
Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create'); 
Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit'); 
// Category
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
// Product
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
//User
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
// Role
Route::get('/role', [RoleController::class, 'index'])->name('role.index');
Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');

//POST
// Slider
Route::post('/slider', [SliderController::class, 'store'])->name('slider.store');
//Brand
Route::post('/brand', [BrandController::class, 'store'])->name('brand.store'); 
// Category
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
//Product
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
// User
Route::post('/user', [UserController::class, 'store'])->name('user.store');
// Role
Route::post('/role', [RoleController::class, 'store'])->name('role.store');


//PUT
// Slider
Route::put('/slider/{id}', [SliderController::class, 'update'])->name('slider.update'); 
// Brand
Route::put('/brand/{id}', [BrandController::class, 'update'])->name('brand.update'); 
// Category
Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
// Product
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
// User
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
// Role
Route::put('/role/{id}', [RoleController::class, 'update'])->name('role.update');


//DELETE
// Slider
Route::delete('/slider/{id}', [SliderController::class, 'destroy'])->name('slider.destroy'); 
// Brand
Route::delete('/brand/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');
// Category
Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
// Product
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
// User
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
// Role
Route::delete('/role/{id}', [RoleController::class, 'destroy'])->name('role.destroy');