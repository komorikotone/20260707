<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShainController extends Controller
{
    //indexメソッドを追加
    public function index()
    {
        // Shainモデルを使用して全件取得
        $shainList = \App\Models\Shain::all();

        // 取得したデータをビューに渡す
        return view('shain.index', ['shainList' => $shainList]);
    }
}
