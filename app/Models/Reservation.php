<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'table_id',
        'res_date',
        'guest_number',
        'message'
    ];

    protected $dates = [
        'res_date'
    ];

    // Each reservation belongs to one table
    public function table()
    {
        return $this->belongsTo(Table::class);
    }

    // Each reservation belongs to one branch
    public function branch()
    {
        return $this->belongsTo(branch::class);
    }
}
