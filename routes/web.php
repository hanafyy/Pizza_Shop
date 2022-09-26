<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Http\Middleware\Admin;

use App\Http\Controllers\PizzaController;
use PHPUnit\TextUI\XmlConfiguration\Group;

use App\Http\Controllers\UserOrderController;

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

Route::get('/user', function () {
    return view('user.home');
})->middleware(['auth']); 


 Route::resource('pizza', PizzaController::class)->middleware(['auth','Admin']);

 Route::get('user/order',[UserOrderController::class ,'index'])->middleware(['auth','Admin'])->name('user.order');
 Route::post('/order/{id}/status',[UserOrderController::class ,'ChangeStatus'])->middleware(['auth','Admin'])->name('user.order.status');


// Route::resource('pizza', PizzaController::class);
Auth::routes();
