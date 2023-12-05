<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $fillable = [
        'cars_id',
        'user_id',
        'phone',
        'address',
        'paymentMethod',
        'total_biaya',
        'start_date',
        'end_date',
    ];
}
