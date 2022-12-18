<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
                'title' => '命名の心得',
                'body' => '命名はデータを基準に考える',
                'user_id' => 1,
                'article_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('articles')->insert([
                'title' => 'バス',
                'body' => '命名はデータを基準に考える',
                'user_id' => 1,
                'article_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('articles')->insert([
                'title' => 'ベース',
                'body' => '命名はデータを基準に考える',
                'user_id' => 1,
                'article_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);         
    }
}
