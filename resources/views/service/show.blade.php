@extends('template.layout')

@section('content')
<h1>Service info</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Duration</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $service->name }}</td>
            <td>{{ $service->description }}</td>
            <td>{{ $service->duration }}</td>
            <td>
                <a href="{{ route('service.edit', $service)}}" class="btn btn-default">Edit</a>
                <a href="{{ route('service.destroy', $service)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    </tbody>
</table>

@endsection