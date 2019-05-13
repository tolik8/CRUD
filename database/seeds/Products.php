<?php

use Illuminate\Database\Seeder;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['id' => 1,  'code' => 4521, 'name' => 'Coffee',    'd_begin' => '2019-05-01', 'd_end' => '2999-12-31'],
            ['id' => 2,  'code' => 1573, 'name' => 'Apple',     'd_begin' => '2019-05-01', 'd_end' => '2999-12-31'],
            ['id' => 3,  'code' => 1524, 'name' => 'Banan'  ,   'd_begin' => '2019-05-01', 'd_end' => '2999-12-31'],
            ['id' => 4,  'code' => 1967, 'name' => 'Juice',     'd_begin' => '2019-05-01', 'd_end' => '2999-12-31'],
            ['id' => 5,  'code' => 2781, 'name' => 'Chocolate', 'd_begin' => '2019-05-01', 'd_end' => '2999-12-31'],
            ['id' => 6,  'code' => 5423, 'name' => 'Ice Cream', 'd_begin' => '2019-05-01', 'd_end' => '2999-12-31'],
            ['id' => 7,  'code' => 1843, 'name' => 'Orange',    'd_begin' => '2019-05-01', 'd_end' => '2999-12-31'],
            ['id' => 8,  'code' => 4267, 'name' => 'Cherry',    'd_begin' => '2019-05-01', 'd_end' => '2999-12-31'],
            ['id' => 9,  'code' => 1043, 'name' => 'Milk',      'd_begin' => '2019-05-01', 'd_end' => '2999-12-31'],
            ['id' => 10, 'code' => 1621, 'name' => 'Bread',     'd_begin' => '2019-05-01', 'd_end' => '2999-12-31'],
        ]);
    }
}
