<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Lang;

class Product extends Model
{
    protected $fillable = ['code', 'name', 'd_begin', 'd_end'];

    public function getColumnsTranslate() {
        return DB::table('translate')
            ->where('table', 'products')
            ->where('lang', Lang::getLocale())
            ->pluck('translate', 'col')
            ->toArray();
    }
}
