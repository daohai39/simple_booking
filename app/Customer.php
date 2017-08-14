<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
        'first_name','last_name','email','cellphone',
        'homephone','workphone','country','city','state','postal_code',
    ];

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }

    public function services()
    {
        return $this->belongsToMany('App\Service');
    }
}
