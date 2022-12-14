<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
// 1- Write in route

Route::get('/hello', function () {
    return 'Hello World';
});

// 2- Call view in route

Route::get('/welcome', function () {
    return view('welcome');
});

// 3- CAll controller function

Route::get('/' , [HomeController::class,'index'])->name('home');

// 4- route-> controller ->view

Route::get('/test' , [HomeController::class,'test'])->name('test');


// 5 Route with parameters

Route::get('/param/{id}/{num}' , [HomeController::class,'param'])->name('param');

// 6 send value from view to controller with form

Route::post('/save' , [HomeController::class,'save'])->name('save');


// 7 Call Layouts and views

Route::get('/' , [HomeController::class,'index'])->name('home');



Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
