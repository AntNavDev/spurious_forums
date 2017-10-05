<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getRole()
    {
        return $this->role;
    }

    public function getProfilePic()
    {
        return $this->profile_picture;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getFullName()
    {
        return ( $this->first_name . ' ' . $this->last_name );
    }

    public function getUsername()
    {
        return $this->username;
    }

    public static function getNameFromId( $id )
    {
        $user = User::find( $id );

        return $user->getFullName();
    }

    public static function getUsernameFromId( $id )
    {
        $user = User::find( $id );

        return $user->getUsername();
    }

    public function isAdmin()
    {
        return ( $this->role === 'admin' );
    }

    public function comments()
    {
        return $this->hasMany( 'App\Comment' );
    }

}
