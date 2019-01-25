@extends('layouts.app')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-offset-2 col-md-8" >
    	<legend>Genre Table</legend>
<table class="table table-hover" >
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			
			
		</tr>
	</thead>
	<tbody>
		@foreach($genres as $row)
		<tr>
			<td>{{$row['id']}}</td>
			<td>{{$row['genre']}}</td>
			
			
			<td><a href="{{url('genre/update/'.$row['id'])}}">edit</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</div>
</div>
@endsection