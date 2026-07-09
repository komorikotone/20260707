<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shain extends Model
{
    protected $table = 'shain';

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
