@extends('layouts.app')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-offset-2 col-md-8" >
    	<legend>Book Table</legend>
  <table id="example" class="display" width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>No</th>
			<th>Code number</th>
			<th>Name</th>
			<th>Edition</th>
			<th>genre</th>
			<th>author</th>
			<th>publishing house</th>
			<th>Update</th>
			
		</tr>
	</thead>
	<tbody>
		@foreach($books as $row)
		<tr>
			<td>{{$row['id']}}</td>
			<td><a href="{{url('book/detail/'.$row['id'])}}">{{$row['codenumber']}}</a></td>
			<td>{{$row['name']}}</td>
			<td>{{$row['edition']}}</td>
			<td>{{$row['genre']['genre']}}</td>
			<td>{{$row['author']['name']}}</td>
			<td>{{$row['publishinghouse']['name']}}</td>
			<td><a href="{{url('book/update/'.$row['id'])}}">edit</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		responsive: true;
    $('#example').DataTable();
} );
</script>
@endsection

