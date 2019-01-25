@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-offset-2 col-md-8">
<legend>Genre Create</legend>
{!! Form::open(array('url' => 'genre/create' ,'class'=>'form-horizontal') ) !!}
  <div class="form-group">
    <label for="exampleInputEmail1">Genre</label>
   
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="genre">
     <p>{{$errors->first('genre')}}</p>
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
