<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => '...',
        ]);
        DB::table('categories')->insert([
            'name' => 'Собаки',
        ]);
        DB::table('categories')->insert([
            'name' => 'Кішки',
        ]);
        DB::table('categories')->insert([
            'name' => 'Попугаї',
        ]);
    }
}
