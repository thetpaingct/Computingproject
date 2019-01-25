@extends('layouts.app')

@section('css')



@endsection
@section('content')




<div class="container-fluid">
		<div class="col-md-10 col-md-offset-1  " style="padding-top: 10px;">

			<div class="row">
		<legend><h4>Select Customer</h4></legend>
			<a href="{{ url('customer/create') }}" class="btn btn-primary-custom  col-md-8 col-md-offset-2 "  style="text-anchor: none;color:#fff; margin-bottom: 10px;" >New Customer</a>
	</div>
<form class="form-horizontal text-color-custom" method="post" role="form" action="{{ url('search/customer')}}">
	{{ csrf_field()}}
	<div class="row">
  <div class="form-group">
		<label for="inputPassword3" class=" col-md-3 col-md-offset-2  control-label text-align-custom" style="padding-left: 100px;">Search Customer</label>
		<div class="col-md-5">
			<div class="input-group">
<input type="text" class="form-control" name="q" placeholder="Search users" required > 
<input  type="hidden" class="form-control" name="service_id" value="{{$id}}" > 
<span class="input-group-btn">
<button type="submit" class="btn btn-default">
<!-- <span class="glyphicon glyphicon-search"> -->
	<i class="fas fa-search"></i>
	
</span>
</button>
</span>
</div>
</div>
</div>
	</div>
	

	
</form>
<div class=" col-md-7 col-md-offset-5 control-label text-align-custom" >
@if(isset($details))
			<p> The Search results for your query <b> {{ $query }} </b> are :</p>
			<h2>Sample User details</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Name</th>
						<th>Vehicles</th>
						<th>Select</th>
					</tr>
				</thead>
				<tbody>
					@foreach($details as $customer)
					<tr>
						<td>{{$customer->customer_name}}</td>
						<td>{{$customer->vehicle}}</td>
						<td><a href="{{ url('order/create/'.$customer['id'],$id) }}"><i class="fa fa-pencil-square-o"></i>Select</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@elseif(isset($message))
			<p>{{ $message }}</p>
@endif
</div>
</div>

 
</div>
<!-- container -->


<!-- </div> -->
@endsection
