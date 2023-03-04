<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipmentModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'market', 'invoice', 'courier', 'awb', 'customer', 'order'
    ];
}
