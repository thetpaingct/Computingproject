@extends('layouts.app')

@section('css')



@endsection
@section('content')


<div class="container-fluid">
<div class="col-md-8 col-md-offset-2" style="padding-top: 10px;">
<form class="form-horizontal text-color-custom" method="post" role="form" action="{{ url('order/submit')}}">
	{{ csrf_field()}}
<div class="col-md-6">
<div class="col-md-10">
				
<div class="form-group">
 	
    <label for="exampleInputEmail1">Customer Name</label>
    <input  disabled type="text" class="form-control" name="customer_name" value="{{$customers->customer_name}} ">
    <input   type="hidden" class="form-control" name="customer_id" value="{{$customers->id}}" > 

  </div>
<div class="form-group">
  	
    <label for="exampleInputEmail1">Phone Number</label>
    <input disabled type="text" class="form-control" name="phone_namber" value="{{$customers->phone_no}}">

  </div>
<div class="form-group">
  	
    <label for="exampleInputEmail1">NRC</label>
    <input disabled type="text" class="form-control" name="NRC" value="{{$customers->NRC}}">

  </div>
<div class="form-group">
  	
    <label for="exampleInputEmail1">Address</label>
    <input disabled type="text" class="form-control" name="address" value="{{$customers->address}}">

  </div>
<div class="form-group">
	
    <label for="exampleInputEmail1">Vehicles</label>
 
    <input  disabled type="text" class="form-control" name="vehicle" value="{{$customers->vehicle}}">

    
 </div> 
<div class="form-group">
 	
    <label for="exampleInputEmail1">Email</label>
    <input disabled type="text" class="form-control" name="email" value="{{$customers->gmail}}">

 </div>
<div class="form-group">

  <label for="exampleInputEmail1">Additional Notes</label>
  <textarea disabled class="form-control" rows="3" name="additional_note" value="{{$customers->additional_note}}"> </textarea>
  </div>

</div>
</div>


<div class="col-md-6">
				
<div class="col-md-10">
<div class="form-group">
		<label for="exampleInputEmail1">Location</label>
		<select class="form-control"  name="location_id">
		 @foreach($locations as $row) 
<option value="{{ $row['id'] }}">{{ $row->location_name }}</option>
      @endforeach
</select>
</div>

<div class="form-group">
		<label for="exampleInputEmail1" >Statement</label>
 <select class="form-control" name="statement_id">
   @foreach($statments as $row) 
<option value="{{ $row['id'] }}">{{ $row->statement_type }}</option>
      @endforeach
  
</select>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Service</label>
    
    <input disabled type="text" class="form-control" name="service_name" value="{{$services->service_name}}">
    <input type="hidden" class="form-control" name="service_id" value="{{$services->id}}">

  </div>
<div class="form-group">
    <label for="exampleInputEmail1" >Extra Notes</label>
   <textarea class="form-control" rows="3" name="extra_note"></textarea>
 </div>

<button type="submit" class="btn btn-primary  panel-buttom-custom buttom-custom" id="button">Order</button>
</div>
</div>

</form>
</div>

 
</div>
<!-- container -->


<!-- </div> -->
@endsection
