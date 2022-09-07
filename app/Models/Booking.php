<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'profile_id',
        'booking_id',
        'booking_type',
        'booking_tenure',
        'booking_rate',
        'service_charges',
        'date',
        'total_amount',
        'status',
    ];
    public function Profile(){
        return $this->belongsTo(Profile::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }

}