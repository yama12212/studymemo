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
        DB::table('posts')->insert([
            [
                'title' => 'タイトルテストテストテスト',
                'post' => 'メモ内容テストテストテスト'
            ],
            [
                'title' => 'タイトルテストテストテスト2',
                'post' => 'メモ内容テストテストテスト2'
            ],
        ]);
    }
}
