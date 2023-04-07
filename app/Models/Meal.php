<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'category_id',
    ];
    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function ordered_item()
    {
        return $this->hasMany(ordered_item::class);
    }
}

