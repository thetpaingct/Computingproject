@extends('layouts.app')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-offset-2 col-md-8">
<legend>Publishinghouse Update</legend>
{!! Form::open(array('url' => 'publishinghouse/update/'.$publishinghouse['id'] ,'class'=>'form-horizontal')) !!}
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name"  value="{{$publishinghouse['name']}}" required>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-default">Submit</button>
</div>
{!! Form::close() !!}
<!-- </body>
</html> -->
</div>
</div>
</div>
@endsection
