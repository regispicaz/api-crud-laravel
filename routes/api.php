<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    UserController,
    LoginController,
};

// Rota pública
Route::post('/login', [LoginController::class, 'login'])->name('login');


// Rota restritas

Route::group(['middleware' => 'auth:sanctum'], function () {
    // Rota de Logout
    Route::post('/logout/{user}', [LoginController::class, 'logout']); //POST - http://127.0.0.1:8000/api/logout

    // Rotas de usuários
    Route::get('/users', [UserController::class, 'index']); // GET - http://127.0.0.1:8000/api/users?page=1
    Route::get('/users/{user}', [UserController::class, 'show']); // GET - http://127.0.0.1:8000/api/users/1
    Route::post('/users', [UserController::class, 'store']); // POST - http://127.0.0.1:8000/api/users
    Route::put('/users/{user}', [UserController::class, 'update']); // PUT - http://127.0.0.1:8000/api/users/1
    Route::delete('/users/{user}', [UserController::class, 'destroy']); // DELETE - http://127.0.0.1:8000/api/users/1
});

