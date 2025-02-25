<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function addition($var1, $var2)
    {
        $result = $var1 + $var2;
        return view('calcs', ['result' => $result]);
    }
    public function subtraction($var1, $var2)
    {
        $result = $var1 - $var2;
        return view('calcs', ['result' => $result]);
    }
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

    public function morning($greeting)
    {
        return view('comment', ['greeting' => '朝のあいさつ' ]);
    }
    public function afternoon($greeting)
    {
        return view('comment', ['greeting' => '昼のあいさつ' ]);
    }
    public function evening($greeting)
    {
        return view('comment', ['greeting' => '夕方のあいさつ' ]);
    }
    public function night($greeting)
    {
        return view('comment', ['greeting' => '夜のあいさつ' ]);
    }
}
