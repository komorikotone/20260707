<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shain extends Model
{
    protected $table = 'shain';
    // 主キーを指定
    protected $primaryKey = 'shain_id';
    protected $foreignKey = 'busho_id';
    // リレーションを定義するためのメソッド
    public function busho()
    {
        return $this->belongsTo(Busho::class, 'busho_id', 'busho_id');
    }

    public $timestamps = false;
    // 変更可能なカラムを指定


    protected $fillable = [
        'shain_mei',
        'mail_address',
        'password',
        'busho_id',
        'yakushoku',
        'nyusha_bi',
        'kyuyo',
    ];
    // 全件取得するメゾッド
    public static function getAllShain()
    {
        return self::all();
    }
}
