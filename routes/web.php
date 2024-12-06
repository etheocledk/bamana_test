<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\Route;


Route::get('/',                                              [ViewsController::class, 'index'])->name('view.landing');
/*
    |--------------------------------------------------------------------------
    | Public Route
    |--------------------------------------------------------------------------
    |
    | AuthFirewall: Redirect to homepage if user load these route once authenticated
    |
    */


Route::middleware(['AuthFirewall'])->group(function () {
    // Route::get('/auth-login',                               [ViewsController::class, 'login'])->name('auth.login');
    // Route::post('/auth-login-store',                        [UserController::class, 'loginStore'])->name('auth.login.store');
});

/*
    |--------------------------------------------------------------------------
    | Private Route : Customer, Admin
    |--------------------------------------------------------------------------
    |
    | Authenticated User
    |
    */

Route::middleware(['customer'])->group(function () {
    Route::get('/auth-logout-customer',               [UserController::class, 'logout'])->name('auth.customer.logout');
    Route::get('/historique-orders-clients',          [ViewsController::class, 'clientOrdersHistory'])->name('transactions.history');
    Route::get('/account',                            [ViewsController::class, 'account'])->name('views.account');
    Route::get('/order-show/{id}',                    [ViewsController::class, 'orderDetails'])->name('views.orders.show');

    Route::post('/auth-reset-customer-avatar-store',        [UserController::class, 'resetUserAvatar'])->name('auth.reset.customer.avatar.store');
    Route::post('/auth-reset-customer-informations-store',  [UserController::class, 'resetUserInformations'])->name('auth.reset.customer.informations.store');
    Route::post('/auth-reset-customer-password-store',      [UserController::class, 'resetUserPassword'])->name('auth.reset.customer.password.store');
    Route::post('/auth-delete-customer-acount-store',       [UserController::class, 'deleteAccount'])->name('auth.delete.customer.account.store');
});


Route::middleware(['admin'])->group(function () {
    // Route::get('/auth-logout-admin',         [UserController::class, 'logout'])->name('auth.admin.logout');
    // Route::get('/dashboard',                 [ViewsController::class, 'dashboard'])->name('view.dashboard');
});

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
