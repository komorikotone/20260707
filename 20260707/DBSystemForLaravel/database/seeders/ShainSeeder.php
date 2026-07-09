<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShainSeeder extends Seeder
{
    use WithoutModelEvents;
    public function run()
    {
        // 部署マスタ（busho）
        DB::table("busho")->insert([
            ["busho_mei" => "営業部"],
            ["busho_mei" => "開発部"],
            ["busho_mei" => "総務部"],
            ["busho_mei" => "人事部"],
        ]);

        // 社員(shain)
        DB::table("shain")->insert([
    [
        "shain_mei" => "山田 太郎",
        "mail_address" => "yamada@example.com",
        "password" => "pass1234",
        "busho_id" => 2,
        "yakushoku" => "主任",
        "nyusha_bi" => "2018-04-01",
        "kyuyo" => 320000
    ],

    [
        "shain_mei" => "佐藤 花子",
        "mail_address" => "sato@example.com",
        "password" => "pass1234",
        "busho_id" => 1,
        "yakushoku" => "一般",
        "nyusha_bi" => "2020-04-01",
        "kyuyo" => 280000
    ],

    [
        "shain_mei" => "鈴木 一郎",
        "mail_address" => "suzuki@example.com",
        "password" => "pass1234",
        "busho_id" => 2,
        "yakushoku" => "課長",
        "nyusha_bi" => "2012-04-01",
        "kyuyo" => 450000
    ],

    [
        "shain_mei" => "高橋 優",
        "mail_address" => "takahashi@example.com",
        "password" => "pass1234",
        "busho_id" => 4,
        "yakushoku" => "一般",
        "nyusha_bi" => "2020-04-01",
        "kyuyo" => 680000
    ]

        ]);
    }
}
