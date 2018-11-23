<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Post::truncate();
        for ($i = 1; $i < 41; $i++) {
            \App\Post::create([
                'title' => '測試' . $i,
                'content' => '測試內容' . $i,
                'user_id' => 1,
                'views' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
