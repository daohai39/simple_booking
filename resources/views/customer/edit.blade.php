@extends('template.layout')

@section('content')
    <h1>Edit Customer</h1>
    <form action="{{ route('customer.update', $customer) }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
        <label for="inputFirstName">First name</label>
        <input type="text" class="form-control" id="inputFirstname" name="first_name" value="{{$customer->first_name}}">
      </div>
      <div class="form-group">
        <label for="inputLastName">Last name</label>
        <input type="text" class="form-control" id="inputLastName" name="last_name" value="{{ $customer->last_name }}">
      </div>
      <div class="form-group">
        <label for="inputEmail">Email address</label>
        <input type="email" class="form-control" id="inputEmail" name="email" value="{{ $customer->email }}">
      </div>
      <div class="form-group">
        <label for="inputCellPhone">Cellphone number</label>
        <input type="tel" class="form-control" id="inputCellPhone" name="cellphone" value="{{ $customer->cellphone }}">
      </div>
      <div class="form-group">
        <label for="inputWorkPhone">Workphone number</label>
        <input type="tel" class="form-control" id="inputWorkPhone" name="workphone" value="{{ $customer->workphone }}">
      </div>
      <div class="form-group">
        <label for="inputHomePhone">Homephone number</label>
        <input type="tel" class="form-control" id="inputHomePhone" name="homephone" value="{{ $customer->homephone }}">
      </div>
      <div class="form-group">
        <label for="inputCountry">Country</label>
        <input type="text" class="form-control" id="inputCountry" name="country" value="{{ $customer->country }}">
      </div>
      <div class="form-group">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity" name="city" value="{{ $customer->city }}">
      </div>
      <div class="form-group">
        <label for="inputState">State</label>
        <input type="text" class="form-control" id="inputState" name="state" value="{{ $customer->state }}">
      </div>
      <div class="form-group">
        <label for="inputPostalCode">Postal Code</label>
        <input type="text" class="form-control" id="inputPostalCode" name="postal_code" value="{{ $customer->postal_code }}">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection