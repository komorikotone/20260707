<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Busho extends Model
{
    protected $table = 'busho';

    protected $fillable = [
        'busho_mei',
    ];
    // 全件取得するメゾッド
    public static function getAllBusho()
    {
        return self::all();
    }
}
