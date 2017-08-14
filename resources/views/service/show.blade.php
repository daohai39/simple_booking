@extends('template.layout')

@section('content')
<h1>Service info</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $service->name }}</td>
            <td>{{ $service->description }}</td>
            <td>{{ $service->start_date }}</td>
            <td>{{ $service->end_date }}</td>
            <td>
                <a href="{{ route('service.edit', $service)}}" class="btn btn-default">Edit</a>
                <a href="{{ route('service.destroy', $service)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    </tbody>
</table>

<h3>Staffs</h3>
<ul>
    @foreach ($service->staffs as $staff)
        <li>{{ $staff->first_name . " " . $staff->last_name}}</li>
    @endforeach    
</ul>

<h3>Customers</h3>
<ul>
    @foreach ($service->customers as $customer)
        <li>{{ $customer->first_name . " " . $customer->last_name}}</li>
    @endforeach    
</ul>
@endsection