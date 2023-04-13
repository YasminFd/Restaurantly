<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'branch_id',
        'total',
        'address',
        'phone_number'
    ];

    // Order belongs to one branch
    public function branch()
    {
        return $this->belongsTo(branch::class);
    }
}
