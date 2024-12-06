<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | Public Route
    |--------------------------------------------------------------------------
    |
    | AuthFirewall: Redirect to homepage if user load these route once authenticated
    |
    */

Route::middleware(['AuthFirewall'])->group(function () {
    Route::get('/auth-login',                               [ViewsController::class, 'login'])->name('auth.login');
    Route::post('/auth-login-store',                        [AuthController::class, 'loginStore'])->name('auth.login.store');
});

/*
    |--------------------------------------------------------------------------
    | Private Route : Customer, Admin
    |--------------------------------------------------------------------------
    |
    | Authenticated User
    |
    */

Route::middleware(['roleCheck:admin,customer'])->group(function () {
    Route::get('/',                                              [ViewsController::class, 'index'])->name('view.landing');
});

// Route::get('/auth-logout-customer',               [UserController::class, 'logout'])->name('auth.customer.logout');

// Route::middleware(['admin'])->group(function () {
//     // Route::get('/auth-logout-admin',         [UserController::class, 'logout'])->name('auth.admin.logout');
//     // Route::get('/dashboard',                 [ViewsController::class, 'dashboard'])->name('view.dashboard');
// });

/*
    |--------------------------------------------------------------------------
    | Fallback Route
    |--------------------------------------------------------------------------
    |
    | Handles all requests that do not match any of the defined routes.
    | This route is used to display a custom 404 error page for unknown routes.
    |
    */
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

/*
        |--------------------------------------------------------------------------
        | Locale Setting
        |--------------------------------------------------------------------------
        |
        | Sets locale to French (France) with UTF-8 encoding for proper date, time,
        | and number formatting.
        |
        */

setlocale(LC_ALL, 'fr_FR.UTF-8');
