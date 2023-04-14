<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    protected $fillable = [
        'name',
        'url_address',
        'location',
        'phone_number'
    ];

    use HasFactory;

    // Branch is associated with many tables
    public function tables()
    {
        return $this->hasMany(table::class);
    }
}
