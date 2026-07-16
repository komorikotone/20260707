<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Busho extends Model
{
    // all()メソッドを使用して、部署一覧を取得するためのモデル
    protected $table = 'busho';

    // 主キーを指定
    protected $primaryKey = 'busho_id';
    // created_atとupdated_atを自動で更新しないようにする
    public $timestamps = false;

    // 変更可能なカラムを指定
    protected $fillable = [
        'busho_mei',
    ];
    // 全件取得するメゾッド
    public static function getAllBusho()
    {
        // Eloquent(エロくアント)のall()メソッドを使用して、部署一覧を取得する
        return self::all();
    }
}
