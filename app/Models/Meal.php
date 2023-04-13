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

    // Meal has only one category
    public function category()
    {
        return $this->belongsTo(category::class);
    }

    // Meal can belong to many orders
    public function ordered_item()
    {
        return $this->hasMany(Ordered_item::class);
    }

    // Meal can have many reviews
    public function reviews()
    {
        return $this->hasMany(review::class);
    }
}
