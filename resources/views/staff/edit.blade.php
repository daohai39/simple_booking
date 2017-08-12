@extends('template.layout')

@section('content')
    <h1>Edit Staff Information</h1>
    <form action="{{ route('staff.update', $staff) }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
        <label for="inputFirstName">First name</label>
        <input type="text" class="form-control" id="inputFirstname" name="first_name" value="{{$staff->first_name }}">
      </div>
      <div class="form-group">
        <label for="inputLastName">Last name</label>
        <input type="text" class="form-control" id="inputLastName" name="last_name" value="{{ $staff->last_name }}">
      </div>
      <div class="form-group">
        <label for="inputEmail">Email address</label>
        <input type="email" class="form-control" id="inputEmail" name="email" value="{{ $staff->email }}">
      </div>
      <div class="form-group">
        <label for="inputTelePhone">Telephone number</label>
        <input type="tel" class="form-control" id="inputTelePhone" name="tele_phone" value="{{ $staff->tele_phone }}">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection