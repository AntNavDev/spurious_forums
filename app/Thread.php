<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $table = 'threads';
    //
    public function subject()
    {
        return $this->belongsTo( 'App\Subject' );
    }
}
