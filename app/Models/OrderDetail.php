<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'profile_id',
        'booking_id',
        'booking_type',
        'booking_tenure',
        'booking_rate',
        'service_charges',
        'date',
        'total_amount',
        'agreement',
    ];
    public function order(){
        return $this->belongsTo(Order::class);
    }
}