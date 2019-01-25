@extends('layouts.app')

@section('css')



@endsection
@section('content')

<div class="container-fluid">
		<div class="col-md-10 col-md-offset-1 " style="padding-top: 10px; margin-bottom: 20px;">
<!-- <div class="col-md-3">
	<a href="{{ url('customer/create') }}" class="btn btn-primary "  style="text-anchor: none;color:#fff; margin-bottom: 10px;">
</div> -->
<div class="row">
	<div class="col-md-offset-2" style="margin-bottom: 20px; ">
		<legend><h1>Order List</h1></legend>
	</div>
</div>
<div class="col-md-2 " style="margin-bottom: 30px;">
	@foreach($statement as $row)
	<div class="row">
	<a href="{{url('dashboard/list/'.$row['id'])}}" class="btn btn-primary " style="margin-bottom: 5px; display: inherit;" value="{{$row['id']}}">{{$row['statement_type']}}</a>
	</div>
	@endforeach
</div>
<div class="col-md-10">
	<table id="example" class="display" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>Order ID</th>
			<th>Order Date</th>
			<th>Service </th>
			<th>Customer Name</th>
			<th>Address</th>
			<th>Phone number</th>
			<th>Notes</th>
			<th>Update</th>
			
			
		</tr>
	</thead>
	<tbody>
			@php $i=1; @endphp
		@foreach($orders as $row)
		
             <tr>
              <td><a href="{{url('order/detail/'.$row['id'])}}">{{ $i }}</td>
                          		
			<td>{{$row['order_date']}}</a></td>
			<td>{{$row['service']['service_name']}}</td>
			<td>{{$row['customer']['customer_name']}}</td>
			<td>{{$row['customer']['address']}}</td>
			<td>{{$row['customer']['phone_no']}}</td>
			<td>{{$row['extra_note']}}</td>
			<td><a href="{{url('order/edit/'.$row['id'])}}">edit</a></td>
			
		</tr>
		@php $i++; @endphp
		@endforeach
	</tbody>
</table>
</div>





<!-- container -->
</div>
</div>



<!-- container -->


<!-- </div> -->
@endsection
@section('script')

@endsection