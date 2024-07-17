<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourPackage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'duration',
        'location',
    ];

    // Relación con Bookings: Un paquete turístico puede tener muchas reservas
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'tour_package_id');
    }
}
