<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable = [
        'profile_id',
        'favorite',
    ];
    public function profile(){
        return $this->belongsTo(Profile::class);
    }
}
