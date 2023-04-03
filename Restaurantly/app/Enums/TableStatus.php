<?php
namespace App\Enums;

enum TableStatus: string
{
    case pending = 'pending';
    case Available = 'available';
    case Unavailable = 'Unavailable';
}
?>