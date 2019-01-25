@extends('layouts.app')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-offset-2 col-md-8">
<legend>Genre Update</legend>
{!! Form::open(array('url' => 'genre/update/'.$genre['id'] ,'class'=>'form-horizontal')) !!}
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name"  value="{{$genre['genre']}}" required>
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
