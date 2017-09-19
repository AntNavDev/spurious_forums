<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [ 'thread_id', 'description', 'author' ];
    //
    public function thread()
    {
        return $this->belongsTo( 'App\Thread' );
    }
}
