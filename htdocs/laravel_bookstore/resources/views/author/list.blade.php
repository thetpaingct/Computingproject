@extends('layouts.app')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-offset-2 col-md-8" >
    	<legend>Author Table</legend>
<table class="table table-hover" >
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>address</th>
			<th>Gender</th>
			<th>Phone number</th>
			<th>Gmail</th>
			<th>update</th>
			<th>delete</th>
			
		</tr>
	</thead>
	<tbody>
		@foreach($authors as $row)
		<tr>
			<td>{{$row['id']}}</td>
			<td>{{$row['name']}}</td>
			<td>{{$row['address']}}</td>
			<td>{{$row['gender']}}</td>
			<td>{{$row['phone_no']}}</td>
			<td>{{$row['email']}}</td>
			<td><a href="{{url('author/update/'.$row['id'])}}">edit</a></td>
			<td><a href="{{url('author/delete/'.$row['id'])}}">delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</div>
</div>
@endsection