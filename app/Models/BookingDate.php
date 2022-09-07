<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDate extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'profile_id',
        'booking_date',
    ];
    public function profile(){
        return $this->belongsTo(Profile::class);
    }
    public function order(){
        return $this->belongsTo(Order::class);
    }
}