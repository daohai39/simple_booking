<?php

namespace App\Http\Controllers;

use App\Service;
use App\Staff;
use App\Customer;
use App\Http\Requests\ServiceFormRequest;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = Service::with('staffs')
                    ->orderBy('created_at','asc')
                    ->get()
                    ->take(10);
        dd($services->toArray());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $staffs = Staff::all(['id','first_name','last_name']);
        $customers = Customer::all(['id','first_name','last_name','email']);
        return view('service.create',compact('staffs','customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceFormRequest $request)
    {
        //
        $staff_ids = $request->staffs;
        $staffs = Staff::findMany($staff_ids);
        $customer_ids = $request->customers;
        $customers = Customer::findMany($customer_ids);
        $service = Service::create($request->only(['name','description','start_date','end_date']));
        $service->staffs()->saveMany($staffs);
        $service->customers()->saveMany($customers);
        return redirect()->route('service.show',compact('service'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
        return view('service.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceFormRequest $request, Service $service)
    {
        //
        $service->update($request->only(['name','description','duration']));
        return redirect()->route('service.show',compact('service'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
        $service->delete();
        return redirect()->route('service.index'); 
    }
}
