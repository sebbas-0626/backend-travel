<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'payment_date',
        'status',
        'booking_id',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
