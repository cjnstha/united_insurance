<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use Notifiable;

    /**
     * @var string
     */
    protected $guard = 'admins';
    /**
     * @var string[]
     */
    protected $fillable = ['name', 'email', 'password', 'type', 'status'];
    /**
     * @var string[]
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * @param $roles
     * @return bool
     */
    public function hasAnyRoles($roles)
    {
        return !!$this->roles()->whereIn('name', $roles)->first();
    }

    /**
     * @param $roles
     * @return bool
     */
    public function hasAnyRole($roles)
    {
        return null !== $this->roles()->where('name', $roles)->first();
    }
}
