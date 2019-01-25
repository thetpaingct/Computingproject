@extends('layouts.app')

@section('nav1')
<li><a href="{{ url('service/create') }}"><font color="white">Create Service</font></a></li>
<li><a href="{{ url('account/view') }}"><font color="white">Accounts</font></a></li>
@endsection

@section('nav')
<li><a href="{{ url('admin/view') }}"><font color="white">Create Account</font></a></li>
@endsection


@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-offset-2 col-md-8">
<legend>Serive Update</legend>
<form class="form-horizontal text-color-custom" method="get" role="form" action="{{ url('service/update/'.$services['id'])}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Service Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="service_name"  value="{{$services['service_name']}}" required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Service Type</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="service_type"  value="{{$services['service_type']}}" required>
  </div>
  
<div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="service_price"  value="{{$services['service_price']}}" required>
  </div>

  <div class="form-group">
  <button type="submit" class="btn btn-primary">Update</button>
</div>
</form>
</div>
  </div>
  
</div>
<!-- </body>
</html> -->

@endsection