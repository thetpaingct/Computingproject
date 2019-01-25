@extends('layouts.app')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-offset-2 col-md-8">
        <legend>Author Create</legend>
{!! Form::open(array('url' => 'author/create','class'=>'form-horizontal' )) !!}
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id=" " placeholder="Enter name" name="name" required>
     <p>{{$errors->first('name')}}</p>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone number</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="phone number" name="phonenumber" required>
     <p>{{$errors->first('phonenumber')}}</p>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">address</label>
    <input type="text" id="exampleInputFile" name="address"  class="form-control" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Gmail</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="gmail" name="gmail" required>
     <p>{{$errors->first('gmail')}}</p>
  </div>
 <!-- <div class="form-group">
    <label for="exampleInputPassword1">gender</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="gender" name="gender" required>
  </div> -->

  <div class="form-group ">
<label for="inputEmail3" class=" control-label" >Genre Name</label>
    <div >
     <select class="form-control" name="gender">
    
    <option value="male">male</option>
       <option value="female">female</option>
      
</select>
      </div>
    </div>

  <div class="form-group">
    <label for="exampleInputPassword1">date of birth</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="date of birth" name="dob" required>
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
