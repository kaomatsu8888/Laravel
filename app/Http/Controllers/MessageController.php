<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// extendsは継承してるよという意味
class MessageController extends Controller
{
    public function hello()
    {
        return view('message.hello');
    }
    public function var()
    {
        return view('message.var', ['variable' => 'Hello from MessageController']);
    }
    
    // ルーティングから受け取ってその値(msg)をビューに渡す
    public function word($msg)
    {   // Viewに渡す変数を連想配列で指定。左側のmsgがViewでの変数名、右側がこのメソッドの変数。
        // ビューの世界ではmsgという変数で$msgを使える
        return view('message.word', ['msg' => $msg]);
    }
}
