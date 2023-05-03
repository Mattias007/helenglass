<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'gallery';
    protected $fillable = [
        'category_id', 
        'image_id', 
        'updated_atw', 
        'created_at'
    ];
    use HasFactory;
}
