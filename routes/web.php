<?php

use App\Http\Controllers\TodoController;
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

Route::get('/todos', [TodoController::class, "index"])->name('app');

Route::get('/addTodo', [TodoController::class, 'create'])->name('addTodo');
Route::post('/addTodo', [TodoController::class, 'store']);


Route::get('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');

Route::get('/edit/{todo}', [TodoController::class, 'edit'])->name('edit');
Route::post('/updateTodo/{todo}', [TodoController::class, 'update'])->name('updateTodo');
