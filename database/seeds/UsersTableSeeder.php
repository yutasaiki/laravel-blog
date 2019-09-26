<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // ユーザー登録はこのSeederを通して行う。
        DB::table('users')->insert([
            'name' => 'laravel_blog',
            'email' => 'laravel_blog@gmail.com',
            'password' => bcrypt('laravel_blog'),
        ]);
    }
}
