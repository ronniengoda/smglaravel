@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Student <a href="{{ url('/students') }}" class="btn btn-warning">Back</a></div>
  <div class="card-body">
      @if ($errors->any())
          <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <form action="{{route('students.update',$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$students->email}}" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" value="{{$students->phone}}" class="form-control"></br>
        <label>Course</label></br>
        <input type="text" name="course" id="course" value="{{$students->course}}" class="form-control"></br>
        <label>Fee</label></br>
        <input type="number" name="fee" id="fee" value="{{$students->fee}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop