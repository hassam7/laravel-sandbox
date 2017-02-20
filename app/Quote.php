<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    //
    function scopeGetCurrentUsers($query,$currentUserId){
        return $query->where('user_id',$currentUserId);
    }
    //example of eloquent accessor with backing field
    function getAuthorAttribute($value){
        return strtoupper($value);
    }

}
