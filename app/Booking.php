<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function ride(){
        return $this->belongsTo(Ride::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
