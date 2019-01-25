@extends('layouts.app')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-offset-2 col-md-8">
    	<legend>Publishinghouse Create</legend>
{!! Form::open(array('url' => 'publishinghouse/create','class'=>'form-horizontal'  ) ) !!}
  <div class="form-group">
    <label for="exampleInputEmail1">Publishinghouse</label>
    
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter publishinghouse" name="name">
    <p>{{$errors->first('name')}}</p>
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
