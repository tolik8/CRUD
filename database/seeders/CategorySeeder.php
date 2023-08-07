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
            'name' => 'Головне',
        ]);
        DB::table('categories')->insert([
            'name' => 'Політика',
        ]);
        DB::table('categories')->insert([
            'name' => 'Економіка',
        ]);
        DB::table('categories')->insert([
            'name' => 'Війна',
        ]);
        DB::table('categories')->insert([
            'name' => 'Події',
        ]);
        DB::table('categories')->insert([
            'name' => 'Суспільство',
        ]);
        DB::table('categories')->insert([
            'name' => 'Технології',
        ]);
        DB::table('categories')->insert([
            'name' => 'Наука',
        ]);
    }
}
