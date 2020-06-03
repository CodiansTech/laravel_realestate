<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function properties(){
        return $this->hasMany('App\Property');
    }

    public function getName(){
        return $this->name;
    }
    
    public function isAdmin(){
        if($this->hasRole('admin'))
            return true;
        return false;
    }

    public function isAgent(){
        if($this->hasRole('agent'))
            return true;
        return false;
    }

    public function getRole(){
        if($this->hasRole('admin'))
            return 'Admin';
        elseif($this->hasRole('agent'))
             return 'Agent';
        else 
            return 'No role';
        
    }
}
