@extends('layouts.app')

@section('content')

<div class="container">
  
	
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active" >
      <img src="{{url('image/default/b4.jpg')}}" width="100%"  >
<div class="carousel-caption">
    <h3>Welcome to Book store!</h3>
    <p>Explore book recommendations, author events, gifts, and more from Harvard Square's landmark indie bookstore.</p>
  </div>
        
    </div>
    <div class="item">
      <img src="{{url('image/default/b2.jpg')}}"  width="100%">
      <div class="carousel-caption">
    <h3>Welcome to Book store!</h3>
    <p>Explore book recommendations, author events, gifts, and more from Harvard Square's landmark indie bookstore.</p>
  </div>
    </div>
    <div class="item">
      <img src="{{url('image/default/b1.jpg')}}"  width="100%" >
      <div class="carousel-caption">
    <h3>Welcome to Book store!</h3>
    <p>Explore book recommendations, author events, gifts, and more from Harvard Square's landmark indie bookstore.</p>
  </div>
</div>
    </div>
    
 

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>


<div class="row" style="margin-top: 20px;">

<div class="col-md-3 ">
    <div class="row" style=" height: 50px;">
     
    </div>

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

<!--  -->
	<div class="col-md-9">
    <div class="row">
      <legend>Lastest List</legend>
    </div>
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
            <a href="{{url('pdf/'.$row['save_pdf'])}}" class="btn btn-default" role="button" type="submit" download >Download</a>
            @endif
          </p>
        </div>
      </div>
  </div>
    @endforeach
	</div>
</div>
	
	</div>
  <div>
    
  </div>
</div>

@endsection