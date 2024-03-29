<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;

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

Route::get('/', [IndexController::class, 'index']);

Route::get('/{index}/edit', [IndexController::class, 'edit'])->where('index', '[0-9]+');

Route::post('/{index}', [IndexController::class, 'update'])->where('index', '[0-9]+');

Route::delete('/{index}', [IndexController::class, 'destroy'])->where('index', '[0-9]+');

Route::get('/{index}', [IndexController::class, 'show'])->where('index', '[0-9]+');

Route::get('/new', [IndexController::class, 'new']);

Route::post('/', [IndexController::class, 'store']);

Route::get('/register', [UserController::class, 'register']);

Route::post('/register', [UserController::class, 'store']);

Route::get('/login', [UserController::class, 'login']);

Route::post('/login', [UserController::class, 'authenticate']);

Route::post('/logout', [UserController::class, 'logout']);
