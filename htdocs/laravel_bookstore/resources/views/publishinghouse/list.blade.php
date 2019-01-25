@extends('layouts.app')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-offset-2 col-md-8" >
    	<legend>Publishinghouse Table</legend>
<table class="table table-hover" >
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			
			
		</tr>
	</thead>
	<tbody>
		@foreach($publishinghouses as $row)
		<tr>
			<td>{{$row['id']}}</td>
			<td>{{$row['name']}}</td>
			
			
			<td><a href="{{url('publishinghouse/update/'.$row['id'])}}">edit</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</div>
</div>
@endsection