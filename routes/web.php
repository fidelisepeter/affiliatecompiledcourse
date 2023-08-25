<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::middleware(['web', 'auth', 'auth.admin'])->prefix('account')->group(function () {

    //Home Page (User Dashbaord)
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //Courses
    Route::get('/courses', [App\Http\Controllers\UserCoursesController::class, 'index'])->name('account.courses');
    Route::get('/course/{name}', [App\Http\Controllers\UserCoursesController::class, 'show'])->name('account.courses.view');
});
