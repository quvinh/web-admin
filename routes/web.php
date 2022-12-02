<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\User\Auth\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\CustomerController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\OrderController;

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
LocalizationController::Routes();
Route::get('/', function () {
    return 'hello user';
});
LoginController::Routes();

Route::fallback(function () {
    abort(404, 'API resource not found');
});
