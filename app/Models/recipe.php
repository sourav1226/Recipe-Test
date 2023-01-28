<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    use HasFactory;
    protected $table = 'recipes';
    protected $fillable = [
        'name',
        'desc',
        'image_url',
        'creator_id'
    ];
}
