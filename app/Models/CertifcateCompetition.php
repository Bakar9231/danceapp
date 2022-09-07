<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertifcateCompetition extends Model
{
    use HasFactory;
    protected $fillable = [
        'profile_id',
        'date',
        'competition',
        'place',
        'result',
    ];
    public function profile(){
        return $this->belongsTo(Profile::class);
    }
}
