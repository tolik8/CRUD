<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'categories';

    public function pets(): HasMany
    {
        return $this->hasMany(Pet::class);
    }
}
