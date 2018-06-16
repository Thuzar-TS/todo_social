<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    public function friend(){
    	return $this->belongsTo(\App\User::class, 'friend_id');
    }

    public function admin(){
    	return $this->belongsTo(\App\User::class, 'admin_id');
    }
}
