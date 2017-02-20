<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = ['text'];
    //
    function scopeGetCurrentUsers($query,$currentUserId){
        return $query->where('user_id',$currentUserId);
    }
    //example of eloquent accessor with backing field
    function getAuthorAttribute($value){
        return strtoupper($value);
    }
    public function user(){
        return $this->belongsTo('\App\User','id','user_id');
    }
}
