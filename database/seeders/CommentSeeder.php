<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'title' => Str::random(20),
            'body' => Str::random(140),
            'user_id' => fake()->numberBetween(1, 10),
            'museum_id' => fake()->numberBetween(1, 30),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
