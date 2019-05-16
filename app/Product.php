<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['code', 'name', 'd_begin', 'd_end'];
}
