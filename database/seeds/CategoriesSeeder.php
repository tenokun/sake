<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'sake' => "ウイスキー"
        ]);
        DB::table('categories')->insert([
            'sake' => "テキーラ"
        ]);
        DB::table('categories')->insert([
            'sake' => "ジン"
        ]);
        DB::table('categories')->insert([
            'sake' => "ウォッカ"
        ]);
        DB::table('categories')->insert([
            'sake' => "ラム"
        ]);
        DB::table('categories')->insert([
            'sake' => "焼酎"
        ]);
        DB::table('categories')->insert([
            'sake' => "果実系キュール"
        ]);
        DB::table('categories')->insert([
            'sake' => "香草系リキュール"
        ]);
        DB::table('categories')->insert([
            'sake' => "ナッツ・種子系リキュール"
        ]);
        

    }
}
