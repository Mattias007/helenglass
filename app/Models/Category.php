<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'gallery';
    protected $fillable = [
        'state', 
        'category_id', 
        'image', 
        'title_et', 
        'title_en', 
        'updated_at', 
        'created_at'
    ];
    use HasFactory;
}
