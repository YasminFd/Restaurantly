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
    public function meals()
    {
        return $this->hasMany(Meal::class);
    }

    public function detachAll()
    {
        $this->meals()->update(['category_id' => null]);
    }
}
