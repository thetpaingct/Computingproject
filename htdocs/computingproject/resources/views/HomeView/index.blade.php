@extends('layouts.app')

@section('css')



@endsection
@section('content')

<div class="container-fluid">
		<div class="col-md-10 col-md-offset-1  " style="padding-top: 10px;">
			<div class="row">
			<div class="col-md-7  col-md-offset-3">
				<legend>Service</legend>
			</div>
			</div>
	<div class="row">	
		<div class="col-md-7  col-md-offset-3">
<form class="form-horizontal text-color-custom" method="post" role="form" action="{{ url('select/customer')}}">
	{{ csrf_field()}}
  <div class="form-group">

		<label for="inputPassword3" class=" col-md-3 col-md-offset-2  control-label text-align-custom" style="padding-left: 100px; ">Services</label>
			<div class=" col-md-5 ">
				<select class="form-control" id="service" name="service_id">

					@foreach($services as $row) 
						<option value="{{ $row['id'] }}">{{ $row['service_name'] }}</option>
					@endforeach
				</select>
			</div>
	</div>

	<div class="col-md-3 col-md-offset-7" style="padding-bottom: 50px;">								
	<button type="submit" class="btn btn-primary  panel-buttom-custom buttom-custom" id="button"  >Order</button>

	</div>
</div>
</form>
</div>	
<div class="row">
	<div class="col-md-7  col-md-offset-3">
	<table class="table table-striped">
   <thead>
    <tr>
      <th>Number</th>
      <th>Service name</th>
      <th>Service Type </th>
      <th>Service Price</th>
      
      
    </tr>
  </thead>
  <tbody>
      @php $i=1; @endphp
    @foreach($services as $row)
    
             <tr >
              <td>{{ $i }}</td>
                              
      <td>{{$row['service_name']}}</td>
    
      <td>{{$row['service_type']}}</td>
      <td>{{$row['service_price']}}</td>
      
    </tr>
    @php $i++; @endphp
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
</div>



<!-- container -->


<!-- </div> -->
@endsection
@section('script')
<script type="text/javascript" src="{{ asset('sweetalert/js/sweetalert.min.js') }}"></script>

<script>
	$(function () {
		$('#myTab a:last').tab('show');
		@if(Session::has('update'))
			// window.alert("Successfully Updated!.");
			// swal({
			// 	title: "Success!",
			// 	text: "Success!",
			// 	icon: "success",
			// 	button: "OK!",
			// });

		swal ( "Success" ,  "Successfully Updated!" ,  "success" );

			
		@endif
	});
	
</script>
@endsection