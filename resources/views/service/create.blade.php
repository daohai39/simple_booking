@extends('template.layout')

@section('content')
  @include('template.errors')
    <form action="{{ route('service.store') }}" method="POST">
        {{ csrf_field() }}
      <div class="form-group">
        <label for="inputName">Name</label>
        <input type="text" class="form-control" id="inputName" name="name" placeholder="First name">
      </div>
      <div class="form-group">
        <label for="inputDescription">Description</label>
        <textarea name="description" id="inputDescription" cols="30" rows="10" class="form-control" placeholder="Description"></textarea>
      </div>
      <div class="form-group">
          <label for="inputStartDate">Start Date</label>
          <input type="date" class="form-control" name="start_date" id="inputStartDate">
      </div>
      <div class="form-group">
          <label for="inputEndDate">End Date</label>
          <input type="date" class="form-control" name="end_date" id="inputEndDate">
      </div>
      <div class="form-group">
        <select name="staffs[]" id="staffSelect" class="form-control" multiple>
            @foreach ($staffs as $staff)
                <option value="{{ $staff->id }}">{{ $staff->first_name . " " . $staff->last_name }}</option>
            @endforeach
        </select> 
      </div>
      <div class="form-group">
        <select name="customers[]" id="customerSelect" class="form-control" multiple>
            @foreach ($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->first_name . " " . $customer->last_name }}</option>
            @endforeach
        </select> 
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection 