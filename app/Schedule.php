<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    protected $fillable = [
        'staff_id', 'service_id', 'start_time', 'end_time'
    ];

    public function staffs()
    {
        return $this->belongsTo('App\Staffs');
    }

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }
}
