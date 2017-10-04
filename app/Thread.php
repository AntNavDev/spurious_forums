<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $table = 'threads';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject_id', 'title', 'description', 'author',
    ];

    public function subject()
    {
        return $this->belongsTo( 'App\Subject' );
    }

    public function comment()
    {
        return $this->hasMany( 'App\Comment' );
    }
}
