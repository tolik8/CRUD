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
            'name' => 'самець',
        ]);
        DB::table('tags')->insert([
            'name' => 'самка',
        ]);
        DB::table('tags')->insert([
            'name' => 'всі_прививки',
        ]);
        DB::table('tags')->insert([
            'name' => 'жодної_прививки',
        ]);
        DB::table('tags')->insert([
            'name' => 'прививки_частково',
        ]);
    }
}
