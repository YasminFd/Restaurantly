<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordered_item extends Model
{
    use HasFactory;
    protected $fillable = [
        'meal_id',
        'order_id',
        'quantity',
    ];

    // Each ordered item belongs to one meal
    public function meal()
    {
        return $this->belongsTo(Meal::class, 'item_id');
    }

    // Each ordered item belongs to one order
    public function order()
    {
        return $this->belongsTo(order::class);
    }
}
