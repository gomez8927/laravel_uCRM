<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
            'name' => 'ポケカ',
            'memo' => 'ポケカの詳細',
            'price' => 500,
            ],
            [
            'name' => '遊戯王',
            'memo' => '遊戯王の詳細',
            'price' => 1000,
            ],
            [
            'name' => 'デュエマ',
            'memo' => 'デュエマの詳細',
            'price' => 1500,
            ],
        ]);
    }
}
