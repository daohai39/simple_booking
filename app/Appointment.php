<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    protected $fillable = [
        'customer_id',
        'service_id',
        'start_time',
        'end_time',
    ];

    public function customer()
    {
        $this->belongsTo('App\Customer');
    }

    public function service()
    {
        $this->belongsTo('App\Service');
    }
}
