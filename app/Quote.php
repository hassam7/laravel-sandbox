<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    //
    function scopeGetCurrentUsers($query,$currentUserId){
        return $query->where('user_id',$currentUserId);
    }

    function getAuthorAttribute($value){
        return strtoupper($value);
    }
}
