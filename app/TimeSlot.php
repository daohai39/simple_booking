<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    //
    protected $fillable = [
        'staff_id',
        'service_id',
        'date',
        'time_avaiable',
    ];

    public function staff()
    {
        return $this->belongsTo("App\Staff");
    }

    public function service()
    {
        return $this->belongsTo("App\Service");
    }
}
