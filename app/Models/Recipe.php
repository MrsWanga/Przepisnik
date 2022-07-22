<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Recipe extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'name',
        'ingredient',
        'preparing',
        'level'
    ];

    public function ingredients(): HasMany
    {
        return $this->hasMany('App\Models\Ingredient');
    }

}
