<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sounds')->insert([
            'article_id' => 1,
            'sound_path' => 'https://chie-pctr.c.yimg.jp/dk/iwiz-chie/que-11233413981?w=200&h=200&up=0',
        ]);
    }
}
