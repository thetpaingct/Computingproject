@extends('layouts.app')

@section('css')


 


@endsection
@section('content')

<div class="container-fluid">
<div class="col-md-8 col-md-offset-2" style="padding-top: 10px;">
	<legend>Order List</legend>
<table id="example" class="display" width="100%" cellspacing="0" >
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
			<th>Delete</th>
			
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
			<td><a href="{{url('order/delete/'.$row['id'])}}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
		</tr>
		@php $i++; @endphp
		@endforeach
	</tbody>
</table>
</div>
</div>




@endsection

@section('script')

@endsection