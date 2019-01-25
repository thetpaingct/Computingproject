@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-offset-2 col-md-8">
      <legend>Author Update</legend>

{!! Form::open(array('url' => 'author/update/'.$author['id'] ,'class'=>'form-horizontal')) !!}
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name"  value="{{$author['name']}}" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone number</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="phone number" name="phonenumber" value="{{$author['phone_no']}}" required>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">address</label>
    <input type="text" id="exampleInputFile" name="address"  class="form-control" value="{{$author['address']}}" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Gmail</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="gmail" name="gmail" value="{{$author['email']}}" required>
  </div>
 <div class="form-group">
    <label for="exampleInputPassword1">gender</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="gender" name="gender" value="{{$author['gender']}}" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">date of birth</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="date of birth" name="dob" value="{{$author['dob']}}" required>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-default">Submit</button>
</div>
{!! Form::close() !!}
</div>
</div>
</div>
<!-- </body>
</html> -->

@endsection
