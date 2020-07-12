<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admins';
    protected $fillable = ['name', 'email', 'password', 'type', 'status'];
    protected $hidden = ['password', 'remember_token'];

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }


}
