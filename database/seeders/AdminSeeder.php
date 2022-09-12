<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'name' => 'imoco',
            'email' => 'oimoengineer0224@gmail.com',
            'password' => 'DaNDe4on7',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
