<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingredients extends Model
{
    use HasFactory;
    protected $table = 'ingredients';
    protected $fillable = [
        'item',
        'amount',
        'unit',
        'recipe_id'
    ];
}
