@extends('template.layout')

@section('content')
    <form action="{{ route('service.update', $service) }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" name="name" value="{{$service->name}}">
        </div>
        <div class="form-group">
            <label for="inputDescription">Description</label>
            <textarea name="description" id="inputDescription" cols="30" rows="10" class="form-control" value="{{ $service->description }}"></textarea>
          </div>
        <div class="form-group">
              <label for="inputDuration">Duration</label>
              <input type="text" class="form-control" name="duration" id="inputDuration" value="{{ $service->duration }}">
         </div>
         <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection