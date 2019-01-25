@extends('layouts.app')

@section('css')



@endsection
@section('content')


<div class="container-fluid">
<div class="col-md-8 col-md-offset-2" style="padding-top: 10px;">
	<legend>Customer Form</legend>
<form class="form-horizontal text-color-custom" method="post" role="form" action="{{ url('customer/store')}}">
	{{ csrf_field()}}
<div class="col-md-6">
<div class="col-md-10">
				
<div class="form-group">
 	
    <label for="exampleInputEmail1">Customer Name</label>
    <input   type="text" class="form-control" name="customer_name" >
      @if ($errors->has('customer_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('customer_name') }}</strong>
                                    </span>
                                @endif

  </div>
<div class="form-group">
  	
    <label for="exampleInputEmail1">Phone Number</label>
    <input  type="text" class="form-control" name="phone_number" >
  @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
  </div>
<div class="form-group">
  	
    <label for="exampleInputEmail1">NRC</label>
    <input  type="text" class="form-control" name="NRC" >
@if ($errors->has('NRC'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('NRC') }}</strong>
                                    </span>
                                @endif
  </div>
<div class="form-group">
  	
    <label for="exampleInputEmail1">Address</label>
    <input  type="text" class="form-control" name="address" >
@if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
  </div>
 
<div class="form-group">
 	
    <label for="exampleInputEmail1">Email</label>
    <input  type="text" class="form-control" name="gmail" >
 @if ($errors->has('gmail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gmail') }}</strong>
                                    </span>
                                @endif
 </div>


</div>
</div>


<div class="col-md-6">
				
<div class="col-md-10">
<div class="form-group">
		<label for="exampleInputEmail1">Customer Attitude</label>
		<select class="form-control"  name="customer_attitude">
		 @foreach($customerattitude as $row) 
<option value="{{ $row['id'] }}">{{ $row['attitude_level']}}</option>
      @endforeach
</select>
</div>


<div class="form-group">
	
    <label for="exampleInputEmail1">Vehicles</label>
 
    <input   type="text" class="form-control" name="vehicle" >
@if ($errors->has('vehicle'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vehicle') }}</strong>
                                    </span>
                                @endif
    
 </div>

<div class="form-group">
    <label for="exampleInputEmail1" >Additional Notes</label>
   <textarea class="form-control" rows="3" name="additional_notes"></textarea>
 </div>

<div class="form-group">
  <button type="submit" class="btn btn-primary  panel-buttom-custom buttom-custom" name="action" value="save">Save</button>
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary  panel-buttom-custom buttom-custom" name="action" value="saveandcontainuous">Save and Order </button>
</div>
</div>
</div>

</form>
</div>

 
</div>
<!-- container -->


<!-- </div> -->
@endsection
