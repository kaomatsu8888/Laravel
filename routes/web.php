<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\CalcController;
use App\Http\Controllers\CommentsController;
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

Route::get('/view/var', function () {
    return view('message.var', ['variable' => 'Hello from web.php']);
});
// 変数を無名関数に渡す
//msgに変数を渡す。/view/word/(URLの上にいます)とカッコ部分をいれるとURL表示が
//http://localhost/view/word/URLの上にいますとなる
Route::get('/view/word/{msg}', function ($msg) {
    return view('message.word', ['msg' => $msg]);
});
// ビューを呼び出す(複数パラメータを渡す)
Route::get('/view/word/{name}/{msg}', function ($name, $msg) {
    return view('message.word2', [
        'name' => $name,
        'msg' => $msg
    ]);
});

// Route::<HTTPメソッド>('<アドレス>', [<コントローラーのクラス, 'アクション名>']);
Route::get('/controller/hello', [MessageController::class, 'hello']);

Route::get('/controller/var', [MessageController::class, 'var']);

Route::get('/controller/word/{msg}', [MessageController::class, 'word']);

Route::get('/controller/word/{name}/{msg}', [MessageController::class, 'word2']);

// 課題
// Route::<HTTPメソッド>('<アドレス>', [<コントローラーのクラス, 'アクション名>']);
Route::get('/calc/{var1}/addition/{var2}',[CalcController::class, 'addition']);
// 引き算のルーティング
Route::get('/calc/{var1}/subtraction/{var2}', [CalcController::class, 'subtraction']);


// 課題間違いあいさつルーティング
// ROUTE::GET('/comments/{morning}', [CommentsController::class, 'morning']);
// 昼のあいさつルーティング
// ROUTE::GET('/comments/{asternoon}', [CommentsController::class, 'afternoon']);
// 夕方のあいさつルーティング
// ROUTE::GET('/comments/{evening}', [CommentsController::class, 'evening']);
// 夜のあいさつルーティング
// ROUTE::GET('/comments/{nihgt}', [CommentsController::class, 'night']);

ROUTE::GET('/comments/morning', [CommentsController::class, 'morning']);
ROUTE::GET('/comments/afternoon', [CommentsController::class, 'afternoon']);
ROUTE::GET('/comments/evening', [CommentsController::class, 'evening']);
ROUTE::GET('/comments/night', [CommentsController::class, 'night']);

// 練習用ルーティング
Route::get('/controller/test/{hensutest}', [MessageController::class, 'hogehoge']);
