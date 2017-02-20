<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuoteComment extends Model
{
    //
    public function quote()
    {
        return $this->belongsTo('App\Quote', 'quote_id', 'id');
    }
}
