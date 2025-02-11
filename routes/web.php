<?php

use Illuminate\Support\Facades\Route;

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
// ローカルホスト=↓の/ ＞routes/welcome.blade.phpを表示
Route::get('/', function () {
    return view('welcome');
});

Route::get('/route/hello', function () {
    return '<h1>Hello from Route!</h1>';
});

Route::get('/view/hello', function () {
    return view('message.hello');
});
