@extends('template.layout')

@section('content')
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
          <label for="inputDuration">Duration</label>
          <input type="text" class="form-control" name="duration" id="inputDuration" placeholder="Duration">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection 