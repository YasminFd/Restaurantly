<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];


    // Category  has many meals
    public function meals()
    {
        return $this->hasMany(Meal::class);
    }

    // Detach all meals from the category
    public function detachAll()
    {
        $this->meals()->update(['category_id' => null]);
    }
}
