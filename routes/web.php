<?php

use App\Http\Controllers\BankController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome');

Route::get('bank', [BankController::class, 'show']);

Route::post('addtransaction', [BankController::class, 'addTransaction']);

Route::view('csrfonly', 'csrf');

// Route::redirect('tytryetryerte', '/', 301);
