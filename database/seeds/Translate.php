<?php

use Illuminate\Database\Seeder;

class Translate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('translate')->insert([
            ['table' => 'products',  'col' => 'code',    'lang' => 'en', 'translate' => 'Code'],
            ['table' => 'products',  'col' => 'name',    'lang' => 'en', 'translate' => 'Name'],
            ['table' => 'products',  'col' => 'd_begin', 'lang' => 'en', 'translate' => 'Date begin'],
            ['table' => 'products',  'col' => 'd_end',   'lang' => 'en', 'translate' => 'Date end'],
            
            ['table' => 'products',  'col' => 'code',    'lang' => 'ru', 'translate' => 'Код'],
            ['table' => 'products',  'col' => 'name',    'lang' => 'ru', 'translate' => 'Имя'],
            ['table' => 'products',  'col' => 'd_begin', 'lang' => 'ru', 'translate' => 'Дата начала'],
            ['table' => 'products',  'col' => 'd_end',   'lang' => 'ru', 'translate' => 'Дата конца'],
            
            ['table' => 'products',  'col' => 'code',    'lang' => 'uk', 'translate' => 'Код'],
            ['table' => 'products',  'col' => 'name',    'lang' => 'uk', 'translate' => 'Ім’я'],
            ['table' => 'products',  'col' => 'd_begin', 'lang' => 'uk', 'translate' => 'Дата початку'],
            ['table' => 'products',  'col' => 'd_end',   'lang' => 'uk', 'translate' => 'Дата кінця'],
        ]);
    }
}
