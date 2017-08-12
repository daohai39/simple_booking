@extends('template.layout')

@section('content')
    <h1>Create A Staff</h1>
    <form method="post" action="/admin/staff">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="inputFirstName">First name</label>
        <input type="text" class="form-control" id="inputFirstname" name="first_name" placeholder="First name">
      </div>
      <div class="form-group">
        <label for="inputLastName">Last name</label>
        <input type="text" class="form-control" id="inputLastName" name="last_name" placeholder="Last Name">
      </div>
      <div class="form-group">
        <label for="inputEmail">Email address</label>
        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="inputTelePhone">Telephone number</label>
        <input type="tel" class="form-control" id="inputTelePhone" name="tele_phone" placeholder="Telephone number">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection