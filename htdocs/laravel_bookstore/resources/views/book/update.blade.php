@extends('layouts.app')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-offset-2 col-md-8">
      <legend>Book Update</legend>

{!! Form::open(array('url' => 'book/update/'.$book['id'] , 'files'=>true,'class'=>'form-horizontal')) !!}

  <div class="form-group col-md-6">
    <label for="inputEmail3" class="col-md-6 control-label">Code number</label>
    <div class="col-md-6">
      <input type="" class="form-control"  placeholder="Code number" name="codenumber" value="{{$book['codenumber']}}" required>
     </div>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail3" class="col-md-6 control-label">Book Name</label>
    <div class="col-md-6">
      <input type="" class="form-control"  placeholder="Book Name" name="bookname" value="{{$book['name']}}" required>
    
    </div>
  </div>

  <div class="form-group col-md-6">
      <label for="inputEmail3" class=" col-md-6 control-label" >Image</label>
    <div class="col-md-6">
      <input type="file"   name="image">
     </div>
    </div>

  <div class="form-group col-md-6">
      <label for="inputEmail3" class="col-md-6 control-label">PDF</label>
    <div class="col-md-6">
      <input type="file"   name="pdf">
      </div>
    </div>

  <div class="form-group col-md-6">
      <label for="inputEmail3" class="col-md-6 control-label">Edition</label>
    <div class="col-md-6">
      <input type="number" class="form-control"  placeholder="Edition" name="edition" value="{{$book['edition']}}"  required>
      </div>
    </div>

    <!--  <div class="form-group col-md-6" >
    <label for="inputEmail3" class="col-md-6 control-label">free</label>
     <div class="col-md-6" >
    
     <div class="radio" >
  <label>
    <input type="radio" name="customerInfo"  value="0" onclick="disablefield()">
   YES
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="customerInfo"  value="1" onclick="disablefield()">
    NO
  </label>
</div>

    </div> 
  </div> -->

    <!--   <div class="form-group col-md-6">
 <label for="inputEmail3" class="col-md-6 control-label">price</label>
    <div class="col-md-6">
      <input type="" class="form-control"  placeholder="price" name="price" id="price" >
     
    </div>
</div> -->

<div class="form-group col-md-6">
<label for="inputEmail3" class="col-md-6 control-label">Author Name</label>
    <div class="col-md-6">
     <select class="form-control" name="authorid"> 
      
     @foreach($authors as $row) 
        
       <option value="{{ $row['id'] }}">{{ $row['name'] }}</option>

       
        @endforeach

</select>
      
    </div>
</div>

<div class="form-group col-md-6">
<label for="inputEmail3" class="col-md-6 control-label" >Genre Name</label>
    <div class="col-md-6">
     <select class="form-control" name="genrename">
     @foreach($genres as $row) 
    <option value="{{ $row['id'] }}">{{ $row['genre'] }}</option>
      @endforeach
</select>
      </div>
    </div>

      <div class="form-group col-md-6">
    <label for="inputEmail3" class="col-md-6 control-label">Publishing House</label>
    <div class="col-md-6">
     <select class="form-control" name="publishinghouse">
        @foreach($publishinghouse as $row) 
  <option value="{{ $row['id'] }}">{{ $row['name'] }}</option>
   @endforeach

</select>
     
    </div>
  </div>

   <div class="form-group col-md-8">
      <label for="inputEmail3" class="col-md-4 control-label" style="padding-left:75px;">Description</label>
    <div class=" col-md-6" style="padding-left: 30px;">
      <textarea class=" col-md-4 form-control"  placeholder="Description" name="description" value="{{$book['description']}}" required> </textarea> 
      
    </div>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>

{!! Form::close() !!}

</div>
</div>
</div>

@endsection
