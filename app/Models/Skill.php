<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'skill', 'level', 'user_id'
    ];
    public function user(){
        $this->belongsTo('App\User', 'user_id');
    }
}
