<?php

use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/index',
    [UsersController::class, 'index']
);

Route::get(
    '/usuarios/novo', 
    [UsersController::class, 'create']
);

Route::post(
    '/usuarios/novo',
    [UsersController::class, 'store']
)->name('new_user');

Route::get(
    '/usuarios/exibir/{id}',
    [UsersController::class, 'show']
);

Route::get(
    '/usuarios/atualizar/{id}',
    [UsersController::class, 'edit']
);

Route::post(
    '/usuarios/atualizar/{id}',
    [UsersController::class, 'update']
) -> name('update_user');

Route::get(
    '/usuarios/deletar/{id}',
    [UsersController::class, 'delete']
);

Route::post(
    '/usuarios/deletar/{id}',
    [UsersController::class, 'destroy']
) -> name('delete_user');