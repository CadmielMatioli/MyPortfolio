<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class More extends Model
{
    protected $fillable = [
        'loking', 'descriptionfuture', 'user_id'
    ];

        
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
