<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class More extends Model
{
    protected $fillable = [
        'loking', 'descriptionfuture', 'user_id'
    ];

        
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
