@extends('template.layout')

@section('content')
    <table class="table table-strip">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Telephone Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $staff->first_name }}</td>
                <td>{{ $staff->last_name }}</td>
                <td>{{ $staff->email }}</td>
                <td>{{ $staff->tele_phone }}</td>
                <td><a href="{{ route('staff.destroy', ['staff' => $staff])}}" class="btn btn-danger">Delete<a>
            </tr>
        </tbody>
    </table>
    <table class="table table-strip">
        <thead>
            <tr>
                <th>Service name</th>
                <th>Description</th>
                <th>Duration</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->description }}</td>
                    <td>{{ $service->duration }}</td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection