<?php

namespace App\Models;
use App\Enums\TableStatus;
use App\Enums\TableLocation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'guest_number',
        'location',
        'status',
        'branch_id'
    ];

    protected $casts =[
        'status'=> TableStatus::class,
        'location'=> TableLocation::class

    ];
    public function branch()
    {
        return $this->belongsTo(branch::class);
    }
}
