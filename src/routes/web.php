<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;


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

// 問い合わせフォームのルーティング

Route::get('/', [ContactController::class, 'index']);

Route::post('/confirm', [ContactController::class, 'confirm']);

Route::post('/thanks', [ContactController::class, 'store']);

Route::get('/thanks', [ContactController::class, 'thanks']);


// ユーザー登録ログインのルーティング

Route::get('/admin', [AuthController::class, 'admin']);

Route::post('/admin', [AuthController::class, 'admin']);

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

// Route::post('/logout', function() {
//     return view('login');
// });

Route::get('/admin/search', [AuthController::class, 'search']);