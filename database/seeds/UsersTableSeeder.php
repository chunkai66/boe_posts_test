<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::truncate();
        \App\User::create([
            'name' => '系統管理員',
            'username' => 'admin',
            'password' => bcrypt(env('DEFAULT_PASSWD')),
            'email' => 'admin@chc.edu.tw',
            'admin' => '1',
        ]);

        \App\User::create([
            'name' => '一般使用者',
            'username' => 'user',
            'password' => bcrypt(env('DEFAULT_PASSWD')),
            'email' => 'user@chc.edu.tw',
        ]);
    }
}
