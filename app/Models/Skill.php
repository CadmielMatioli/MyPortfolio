<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Skill extends Model
{
    protected $fillable = [
        'skill', 'level', 'user_id'
    ];
    
    public function user(){
        $this->belongsTo(User::class, 'user_id');
    }
}
