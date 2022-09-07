<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'profile_id',
        'offer',
    ];
    public function profile(){
        return $this->belongsTo(Profile::class);
    }
}
