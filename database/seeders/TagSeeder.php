<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            'name' => 'новини',
        ]);
        DB::table('tags')->insert([
            'name' => 'спорт',
        ]);
        DB::table('tags')->insert([
            'name' => 'політика',
        ]);
        DB::table('tags')->insert([
            'name' => 'економіка',
        ]);
        DB::table('tags')->insert([
            'name' => 'війна',
        ]);
    }
}
