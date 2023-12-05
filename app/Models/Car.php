<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'merk',
        'model',
        'tahun',
        'biaya_sewa',
    ];

    public function rentals() {
        return $this->hasMany(Rental::class);
    }

    public function show($carId)
    {
        $car = Car::find($carId);
        return view('rental', compact('car'));
    }
}
