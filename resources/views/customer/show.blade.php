@extends('template.layout')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Cellphone</th>
                <th>Country</th>
                <th>City</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $customer->first_name }}</td>
                <td>{{ $customer->last_name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->cellphone }}</td>
                <td>{{ $customer->country }}</td>
                <td>{{ $customer->city }}</td>
                <td>
                    <a href="{{ route('customer.edit', $customer) }}" class="btn btn-default">Edit</a>
                    <a href="{{ route('customer.destroy', $customer )}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection