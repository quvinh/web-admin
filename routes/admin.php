<?php

use App\Http\Controllers\Admin\Auth\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LogoutController;
use App\Http\Controllers\Admin\BillController;
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FormulaController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\SystemController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\Route;

LocalizationController::Routes();
LoginController::Routes();
Route::group(['middleware' => ['auth:admin']], function () {
    LogoutController::Routes();
    DashboardController::Routes();
    CalendarController::Routes();
});

Route::fallback(function () {
    // abort(404, 'API resource not found');
    return redirect()->route('admin');
});
