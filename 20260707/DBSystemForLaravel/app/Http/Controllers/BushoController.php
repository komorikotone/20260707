<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BushoController extends Controller
{
    //indexメソッドを追加
    public function index()
    {
        // Bushoモデルを使用して全件取得
        $bushoList = \App\Models\Busho::all();
        
        // 取得したデータをビューに渡す
        return view('busho.index', ['bushoList' => $bushoList]);
    }
}
