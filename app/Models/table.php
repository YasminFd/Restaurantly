<?php

namespace App\Models;

use App\Enums\TableStatus;
use App\Enums\TableLocation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'guest_number',
        'location',
        'status',
        'branch_id'
    ];

    protected $casts = [
        'status' => TableStatus::class,
        'location' => TableLocation::class

    ];

    // Each table belongs to one branch
    public function branch()
    {
        return $this->belongsTo(branch::class);
    }

    // Each table can have many reservations
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
