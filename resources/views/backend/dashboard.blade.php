@extends('template.layout')

@section('content')
    <h1>Dash board</h1>
    <ul>
        <li>
            <a href="{{ route('customer.index') }}">Customer</a>
        </li>
        <li>
            <a href="{{ route('staff.index') }}">Staff</a>
        </li>
        <li>
            <a href="{{ route('service.index') }}">Service</a>
        </li>
        <li>
            <a href="{{ route('appointment.index') }}">Appointment</a>
        </li>
    </ul>
@endsection