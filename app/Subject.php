<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    protected $casts = [
        'moderators' => 'array',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'moderators',
    ];
    
    public function threads()
    {
        return $this->hasMany( 'App\Thread' );
    }
}
