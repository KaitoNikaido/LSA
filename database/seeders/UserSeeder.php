<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'UserName',
            'email' => 'User1@mailaddress.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'UserName',
            'email' => 'User2@mailaddress.com',
            'password' => bcrypt('password'),
        ]);
    }
}
