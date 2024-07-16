<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'package_id',
        'booking_date',
        'status',
    ];

    // Relación con User: Una reserva pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con TourPackage: Una reserva pertenece a un paquete turístico
    public function tourPackage()
    {
        return $this->belongsTo(TourPackage::class);
    }

}
