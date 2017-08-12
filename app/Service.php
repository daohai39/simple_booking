<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'duration',
    ];
    
    public function staffs()
    {
        return $this->belongsToMany('App\Staff');
    }

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }
}
