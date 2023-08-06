<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pet_tag')->insert([
            'pet_id' => 1,
            'tag_id' => 1,
        ]);
        DB::table('pet_tag')->insert([
            'pet_id' => 1,
            'tag_id' => 3,
        ]);
        DB::table('pet_tag')->insert([
            'pet_id' => 4,
            'tag_id' => 2,
        ]);
        DB::table('pet_tag')->insert([
            'pet_id' => 4,
            'tag_id' => 3,
        ]);
    }
}
