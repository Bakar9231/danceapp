<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'slug',
        'account_type',
        'name',
        'surname',
        'aname',
        'city',
        'state',
        'country',
        'wphone',
        'email',
        'height',
        'weight',
        'eye',
        'hair',
        'language',
        'facebook',
        'instagram',
        'linkedin',
        'youtube',
        'website',
        'portfolio',
        'about',
        'image',
        'latitude',
        'longitude',
        'address',
        'half_price',
        'full_price',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function CertifcateCompetition(){
        return $this->hasMany(CertifcateCompetition::class);
    }
    public function Skill(){
        return $this->hasMany(Skill::class);
    }
    public function Workshop(){
        return $this->hasMany(Workshop::class);
    }
    public function Offer(){
        return $this->hasMany(Offer::class);
    }
    public function Favorite(){
        return $this->hasMany(Favorite::class);
    }
    public function Education(){
        return $this->hasMany(Education::class);
    }
    public function ProfessionalExperince(){
        return $this->hasMany(ProfessionalExperince::class);
    }
    public function Photo(){
        return $this->hasMany(Photo::class);
    }
}
