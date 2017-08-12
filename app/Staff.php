<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $table = "staffs";
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'tele_phone'
    ];

    public function services()
    {
        return $this->belongsToMany('App\Service');
    }

    // public function appointments()
    // {
    //     return $this->belongsTomany('App\Appointment');
    // }
}
