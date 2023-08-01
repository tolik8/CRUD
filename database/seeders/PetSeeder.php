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
        DB::table('pets')->insert(['name' => 'Рекс', 'age' => 10]);
        DB::table('pets')->insert(['name' => 'Тузік', 'age' => 5]);
        DB::table('pets')->insert(['name' => 'Босий', 'age' => 3]);
    }
}
