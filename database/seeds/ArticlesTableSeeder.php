<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // 確認用に記事データを作成
        DB::table('articles')->insert(
            [
                [
                    'title' => 'title1_' . Str::random(30),
                    'body' => 'body1_' . Str::random(500),
                    'is_deleted' => false,
                    'created_by' => Str::random(10),
                    'updated_by' => Str::random(10),
                ],
                [
                    'title' => 'title2_' . Str::random(40),
                    'body' => 'title2_' . Str::random(750),
                    'is_deleted' => false,
                    'created_by' => Str::random(10),
                    'updated_by' => Str::random(10),
                ],
                [
                    'title' => 'title3_' . Str::random(50),
                    'body' => 'title3_' . Str::random(1000),
                    'is_deleted' => false,
                    'created_by' => Str::random(10),
                    'updated_by' => Str::random(10),
                ]
            ]
        );
    }
}
