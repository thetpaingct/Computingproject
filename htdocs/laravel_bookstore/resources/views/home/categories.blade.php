@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
      <div class="col-md-3" style="margin-bottom: 20px; padding-left: 30px;">   
   
      <h3 >Categories</h3>
    
  </div>
    <div class="col-md-offset-3">   
    <div class="panel panel-default">
      <div class="panel-heading">Search Result : </div>
    </div>
  </div>
  </div>
<div class="row" >
	<div class="col-md-3 ">
 

    <div class="panel-group  col-md-12 ">
  <div class="panel panel-primary ">
    <div class="panel-heading ">
      <h4 class="panel-title ">
        <a data-toggle="collapse" href="#collapse1">Author</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <ul class="list-group">
        @foreach($authors as $row)
        <li class="list-group-item" value="{{$row['id']}} "><a href="{{url('home/authorsearch/author/'.$row['id'])}}">{{$row['name']}}</a></li>
      @endforeach
      </ul>
   
    </div>
  </div>
<!--  -->
<div class="panel panel-primary">
    <div class="panel-heading" style="">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse2">Genre</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <ul class="list-group">
         @foreach($genre as $row)
        <li class="list-group-item" value="{{$row['id']}}"><a href="{{url('home/genresearch/genre/'.$row['id'])}}">{{$row['genre']}}</a></li>
        @endforeach
         </ul>
    </div>
     
    
  </div>

  <div class="panel panel-primary">
    <div class="panel-heading" style="">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse3">Publishing House</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <ul class="list-group">
          @foreach($publishinghouse as $row)
        <li class="list-group-item" value="{{$row['id']}}"><a href="{{url('home/publishinghousesearch/publishinghouse/'.$row['id'])}}">{{$row['name']}}</a></li>
        @endforeach
      </ul>
    
    </div>
  </div>
  <!--  -->
</div> 
</div>

	<div class="col-md-9">

	   <div class="row">
     
    @foreach($books as $row)
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail card2"  >
        <img src="{{url('image/'.$row['image'])}}" alt="...">
        <div class="caption">
          <h3> {{substr ($row["name"],0,17 )}} </h3>
          <p> {{$row["price"]}} Kyats</p>
          <p>
            <a href="{{url('book/detail/'.$row['id'])}}" class="btn btn-primary" >Detail</a> 
             @if($row["price"] == 0)
            <a href="" class="btn btn-default" role="button" type="submit">Download</a>
            @endif
          </p>
        </div>
      </div>
  </div>
    @endforeach
  </div>
	</div>
	
</div>

</div>

@endsection