<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shain;
use App\Models\Busho;

// 社員コントローラー

class ShainController extends Controller
{
    //indexメソッドを追加
    public function index()
    {
        // Shainモデルを使用して全件取得
        $shainList = Shain::all();
        $bushoList = Busho::all();

        // 取得したデータをビューに渡す
        return view('shain.index', ['shainList' => $shainList, 'bushoList' => $bushoList]);
    }

    // 社員新規登録メソッドを追加
    public function sakusei()
    {
        $bushoList = Busho::all();
        // ビューに渡す
        return view('shain.sakusei', ['bushoList' => $bushoList]);
    }

    // 社員保存メソッドを追加
    public function hozon(Request $request)
    {
        // バリデーション
        $request->validate([
            // 社員名は「必須」で「文字列」、「最大255文字」
            'shain_mei' => 'required|string|max:255',
        ]);
        // 社員を保存
        Shain::create($request->all());

        // 社員一覧にリダイレクト
        return redirect()->route('shain.index');
    }

    // 社員編集メソッドを追加
    public function edit(int $id)
    {
        // 社員を取得
        $shain = Shain::findOrFail($id);
        // ビューに渡す
        return view('shain.edit', ['shain' => $shain]);
    }

    // 社員更新メソッドを追加
    public function update(Request $request, int $id)
    {
        // バリデーション
        $request->validate([
            // 社員名は「必須」で「文字列」、「最大255文字」
            'shain_mei' => 'required|string|max:255',
        ]);
        // 社員を取得
        $shain = Shain::findOrFail($id);
        // 社員を更新
        $shain->update($request->all());

        // 社員一覧にリダイレクト
        return redirect()->route('shain.index');
    }

    // 社員削除メソッドを追加
    public function delete(int $id)
    {
        // 社員を取得
        $shain = Shain::findOrFail($id);
        // 社員を削除
        $shain->delete();
        // 社員一覧にリダイレクト
        return redirect()->route('shain.index');
    }
}
