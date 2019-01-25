@extends('layouts.app')

@section('css')



@endsection
@section('content')


<div class="container-fluid">
<div class="col-md-8 col-md-offset-2" style="padding-top: 10px;">
  <div class="col-md-4 col-md-offset-4">
<form class="form-horizontal text-color-custom" method="get" role="form" action="{{ url('order/update/'.$orders['id'])}}">
  {{ csrf_field()}}




<div class="form-group">
    <label for="exampleInputEmail1">Location</label>
    <select class="form-control"  name="location_id">
     @foreach($locations as $row) 
<option value="{{ $row['id'] }}">{{ $row['location_name'] }}</option>
      @endforeach
</select>
</div>

<div class="form-group">
    <label for="exampleInputEmail1" >Statement</label>
 <select class="form-control" name="statement_id">
   @foreach($statements as $row) 
<option value="{{ $row['id'] }}">{{ $row['statement_type'] }}</option>
      @endforeach
  
</select>
</div>

<div class="form-group">
    <label for="exampleInputEmail1" >Extra Notes</label>
   <textarea class="form-control" rows="3" name="extra_note" ></textarea>
 </div>

<button type="submit" class="btn btn-primary  panel-buttom-custom buttom-custom" id="button" style="margin-bottom: 20px;">Edit</button>

</form>
</div>
</div>

 
</div>
<!-- container -->


<!-- </div> -->
@endsection
