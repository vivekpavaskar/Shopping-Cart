<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(30),
            'price' => 100,
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(30),
            'price' => 100,
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(30),
            'price' => 100,
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(30),
            'price' => 100,
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(30),
            'price' => 100,
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(30),
            'price' => 100,
        ]);
    }
}
