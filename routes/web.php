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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/signup', [AuthController::class, 'signupForm'])
    ->name('auth.signup.form');
Route::post('/auth/signup', [AuthController::class, 'signupSubmission'])
    ->name('auth.signup.submit');

Route::get('/auth/signin', [AuthController::class, 'signForm'])
    ->name('auth.signin.form');
Route::post('/auth/signin', [AuthController::class, 'signSubmission'])
    ->name('auth.signin.submit');

Route::get('/auth/success', [AuthController::class, 'successPage'])
    ->name('auth.signin.success');