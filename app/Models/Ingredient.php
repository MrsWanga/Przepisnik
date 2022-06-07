<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ingredient extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'name',
        'unit',
        'amount',
    ];

    public function recipe(): BelongsTo
    {
        return $this->belongsTo('App\Models\Recipe', 'recipe_id');
    }
}
