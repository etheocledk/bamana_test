<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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
    Route::get('/',                          [ViewsController::class, 'index'])->name('view.landing');
    Route::get('/auth-logout',               [AuthController::class, 'logout'])->name('auth.logout');
});


// Route pour afficher le formulaire de création d'un produit (create)
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

// Route pour enregistrer un produit dans la base de données (store)
Route::post('products', [ProductController::class, 'store'])->name('products.store');

// Route pour afficher le formulaire d'édition d'un produit (edit)
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Route pour mettre à jour un produit (update)
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');

// Route pour supprimer un produit (destroy)
Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');


Route::middleware(['roleCheck:admin'])->group(function () {

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
