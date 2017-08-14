<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date'
    ];
    
    public function staffs()
    {
        return $this->belongsToMany('App\Staff');
    }

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }

    public function customers()
    {
        return $this->belongsToMany('App\Customer');
    }

    public function timeslots()
    {
        return $this->hasMany('App\TimeSlot');
    }
}
