<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_name = 'y_saiki';

        // ユーザー登録はこのSeederを通して行う。
        DB::table('users')->insert([
            // 'name' => Str::random(10),
            // 'email' => Str::random(10).'@gmail.com',
            // 'password' => bcrypt('password'),
            'name' => $user_name,
            'email' => 'yuta.saiki.w1@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
