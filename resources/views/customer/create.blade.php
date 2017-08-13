@extends('template.layout')

@section('content')
    <h1>Create customer</h1>

   @include('template.errors')

    <form action="{{ route('customer.store') }}" method="POST">
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
        <label for="inputCellPhone">Cellphone number</label>
        <input type="tel" class="form-control" id="inputCellPhone" name="cellphone" placeholder="Telephone number">
      </div>
      <div class="form-group">
        <label for="inputWorkPhone">Cellphone number</label>
        <input type="tel" class="form-control" id="inputWorkPhone" name="workphone" placeholder="Workphone number">
      </div>
      <div class="form-group">
        <label for="inputHomePhone">Cellphone number</label>
        <input type="tel" class="form-control" id="inputHomePhone" name="homephone" placeholder="Homephone number">
      </div>
      <div class="form-group">
        <label for="inputCountry">Country</label>
        <input type="text" class="form-control" id="inputCountry" name="country" placeholder="Country">
      </div>
      <div class="form-group">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity" name="city" placeholder="City">
      </div>
      <div class="form-group">
        <label for="inputState">State</label>
        <input type="text" class="form-control" id="inputState" name="state" placeholder="State">
      </div>
      <div class="form-group">
        <label for="inputPostalCode">Postal Code</label>
        <input type="text" class="form-control" id="inputPostalCode" name="postal_code" placeholder="Postal Code">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection