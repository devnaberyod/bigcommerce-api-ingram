<?php

namespace ClevAppBcRestApi\Authentication;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Contracts\Auth\Authenticable;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class AppUser extends Eloquent implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, SoftDeletes; 

    protected $collection = 'users';
    protected $primaryKey  = '_id';


    protected $dates = ['deleted_at'];
    protected $hidden = ['password', 'remember_token'];

    /**
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return $this->email;
        // Return the name of unique identifier for the user (e.g. "id")
    }
    /**
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->_id;
    }
    /**
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }
    /**
     * @return string
     */
    public function getRememberToken()
    {
        // Return the token used for the "remember me" functionality
        return $this->remember_token;
    }
    /**
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value)
    {
        // Save a new token user for the "remember me" functionality
        $this->remember_token = $value;
    }
    /**
     * @return string
     */
    public function getRememberTokenName()
    {
        return $this->remember_me;
        // Return the name of the column / attribute used to store the "remember me" token
    }

    public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = bcrypt($password);
    }
}