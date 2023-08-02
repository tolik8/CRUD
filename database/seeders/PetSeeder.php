<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pets')->insert([
            'name' => 'Рекс',
            'age' => 10,
            'category_id' => 2,
        ]);
        DB::table('pets')->insert([
            'name' => 'Тузік',
            'age' => 5,
            'category_id' => 2,
        ]);
        DB::table('pets')->insert([
            'name' => 'Босий',
            'age' => 3,
            'category_id' => 2,
        ]);
        DB::table('pets')->insert([
            'name' => 'Булька',
            'age' => 8,
            'category_id' => 3,
        ]);
        DB::table('pets')->insert([
            'name' => 'Марсік',
            'age' => 2,
            'category_id' => 3,
        ]);
    }
}
