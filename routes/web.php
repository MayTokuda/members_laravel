<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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


// 登録のURLが来たら、登録画面に遷移
Route::get('/register', [MemberController::class, 'register']);
// 登録ボタンのURLが来たら、書き込む
Route::post('/memberRegister', [MemberController::class, 'memberRegister']);


// 一覧のURLが来たら、一覧画面に遷移
Route::get('/top', [MemberController::class, 'top']);


// 編集画面に遷移
Route::get('/edit/{id}', [MemberController::class, 'edit']);
// 編集ボタンのURLが来たら、書き込む
Route::post('/memberEdit', [MemberController::class, 'memberEdit']);
// 削除ボタンのURLが来たら、書き込む
Route::get('/memberDelete/{id}', [MemberController::class, 'memberDelete']);


