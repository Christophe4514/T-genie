<?php

use App\Http\Controllers\HomePage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomePage::class, 'home']);
Route::get('/shop', [HomePage::class, 'shop']);
Route::get('/cart', [HomePage::class, 'cart']);
Route::get('/paiement', [HomePage::class, 'paiement']);
Route::get('/login', [HomePage::class, 'login']);
Route::get('/signup', [HomePage::class, 'signup']);
Route::get('/orders', [HomePage::class, 'orders']);


Route::resource('publication', PublicationController::class);
