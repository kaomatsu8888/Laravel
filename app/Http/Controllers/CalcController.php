<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
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
    public function addition($var1, $var2)
    {
        $result = $var1 + $var2;
        return view('calcs',['result' => $result]);
    }
    public function subtraction($var1, $var2)
    {
        $result = $var1 - $var2;
        return view('calcs',['result' => $result]);
    }



    public function greeting($msg)
    {
        return view('message.greeting', ['msg' => $msg]);
    }
    public function beauty($msg)
    {
        if ($msg == 'yes') {
            $result = 'Yes!高須クリニック';
        } else {
            $result = '湘南美容外科クリニック';
        }
        return view('message.beauty', ['result' => $result]);
    }
}
