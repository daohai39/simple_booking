<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TimeSlot;
use App\Http\Requests\TimeSlot\StoreTimeSlotRequest;

class TimeSlotController extends Controller
{
    //

    public function store(StoreTimeSlotRequest $request)
    {
        $timeslot = TimeSlot::create($request->all());

        dd($timeslot);
    }
}
