<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetTag extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'pet_tag';
}
