<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PizzaController;

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
Route::resource('pizza', PizzaController::class);


// Route::get('/pizza/index', [PizzaController::class, 'index'])->name('pizza.index');

// Route::get('/pizza/create', [PizzaController::class, 'create'])->name('pizza.create');
// Route::post('/pizza/store', [PizzaController::class, 'store'])->name('pizza.store');

// Route::get('/pizza/{$id}/edit', [PizzaController::class, 'edit'])->name('pizza.edit');

// Route::delete('/pizza/{$id}/delete', [PizzaController::class, 'destroy'])->name('pizza.destroy');

// Route::delete('/pizza/delete/{$id}', [PizzaController::class, 'delete'])->name('pizza.delete');
Auth::routes();
