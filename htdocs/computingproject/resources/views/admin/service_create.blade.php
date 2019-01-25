@extends('layouts.app')

@section('nav1')
<li><a href="{{ url('service/create') }}"><font color="white">Create Service</font></a></li>
<li><a href="{{ url('account/view') }}"><font color="white">Accounts</font></a></li>
@endsection

@section('nav')
<li><a href="{{ url('admin/view') }}"><font color="white">Create Account</font></a></li>
@endsection


@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-offset-2 col-md-8" >
        <legend>Service Create</legend>
<form class="form-horizontal text-color-custom" method="post" role="form" action="{{ url('service/create')}}">
  {{ csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id=" " placeholder="Enter name" name="service_name" required>
     <p>{{$errors->first('service_name')}}</p>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price </label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="phone number" name="service_price" required>
     <p>{{$errors->first('service_price')}}</p>
  </div>

  <div class="form-group">
  <button type="submit" class="btn btn-primary">Create</button>
   </div>
</form>
</div>
  </div>
  <div class="row" style="margin-bottom: 10px;">
    <table id="example" class="display" width="100%" cellspacing="0" >
  <thead>
    <tr>
      <th>Service ID</th>
      <th>Service name</th>
      <th>Service Type </th>
      <th>Service Price</th>
      <th>Update</th>
      <th>Delete</th>

      
    </tr>
  </thead>
  <tbody>
      @php $i=1; @endphp
    @foreach($services as $row)
    
             <tr>
              <td>{{ $i }}</td>
                              
      <td><a href="{{url('service/detail/'.$row['id'])}}">{{$row['service_name']}}</a></td>
    
      <td>{{$row['service_type']}}</td>
      <td>{{$row['service_price']}}</td>
      <td><a href="{{url('service/edit/'.$row['id'])}}">edit</a></td>
      <td><a href="{{url('service/delete/'.$row['id'])}}" onclick="return confirm('Are you sure you want to delete?');">delete</a></td>
    </tr>
    @php $i++; @endphp
    @endforeach
  </tbody>
</table>
  </div>
</div>
<!-- </body>
</html> -->

@endsection