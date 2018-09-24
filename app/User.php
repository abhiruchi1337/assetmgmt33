<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function roles(){
        return $this->belongsToMany('\App\Role','user_role','user_id','role_id');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'department'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function hasAnyRole($roles){
        if(is_array($roles)){
            foreach($roles as $r){
                if($this->hasRole($r)){
                    return true;
                }
            }
        }
        else{

            if($this->hasRole($roles)){

                return true;
            }
        }
    }
    public function hasRole($r){
        if ($this->roles()->where('name', $r)->first()){
            return true;
        }
        return false;
    }
}
