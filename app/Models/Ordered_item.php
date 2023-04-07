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
    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }
    public function order()
    {
        return $this->belongsTo(order::class);
    }
}
