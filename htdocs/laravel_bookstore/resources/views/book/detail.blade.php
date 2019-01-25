@extends('layouts.app')

@section('content')


<div class="container">
  	<div class="row" style="width:100px height :200px;">
  		<div class="col-md-6 thumbnail" >
        @foreach($books as $row)
  			 <img src="{{url('image/'.$row['image'])}}">
  		</div>
  		<div class = "col-md-6">
  			<div class="row">
  					
  				<dl class="dl-horizontal">
 					 <dt>Name</dt>
  					<dd>{{$row['name']}}</dd>
				</dl>
				<dl class="dl-horizontal">
 					 <dt>Description</dt>
  					<dd>{{$row['description']}}</dd>
				</dl>
				<dl class="dl-horizontal">
 					 <dt>Author Name</dt>
  					<dd>{{$row['author']['name']}}</dd>
				</dl>
				<dl class="dl-horizontal">
 					 <dt>Genre Name</dt>
  					<dd>{{$row['genre']['genre']}}</dd>
				</dl>
				<dl class="dl-horizontal">
 					 <dt>Publishing House</dt>
  					<dd>{{$row['publishinghouse']['name']}}</dd>
				</dl>
				
        <dl class="dl-horizontal">
          <dd>
        <a href="{{url('book/')}}" class="btn btn-primary">Back</a></dd>
        </dl>

      
@endforeach
  			</div>
  		</div>
  	</div>

  </div>
@endsection

