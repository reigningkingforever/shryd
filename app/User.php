<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','image','phone','idType','identification'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeDriver($query){
        return $query->where('user_type', 'driver');
    }

    public function scopePassenger($query){
        return $query->where('user_type', 'passenger');
    }

    public function vehicle(){
        return $this->hasOne(Vehicle::class);
    }
    public function rides(){
        return $this->hasMany(Ride::class);
    }
    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
