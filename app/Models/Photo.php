<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'parent_id', 'parent_type', 'path', 'random_id', 'profile_id'
    ];
    public function parent(){
        return $this->morphTo(__FUNCTION__, 'parent_type', 'parent_id');
    }
    public function profile(){
        return $this->belongsTo(Profile::class);
    }
}
