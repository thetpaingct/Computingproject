@extends('layouts.app')

@section('css')


 


@endsection
@section('content')

<div class="container-fluid">
<div class="col-md-8 col-md-offset-2" style="padding-top: 10px;">
  <legend>Customer List</legend>
<table id="example" class="display" width="100%" cellspacing="0" >
  <thead>
    <tr>
      <th>Customer ID</th>
      <th>Customer Name</th>
      <th>Customer Ph number </th>
      <th>Customer Address</th>
      <th>Vehicle number</th>
      <th>NRC</th>
      <th>Notes</th>
      <th>Update</th>
       <th>Delete</th>
      
    </tr>
  </thead>
  <tbody>
      @php $i=1; @endphp
    @foreach($customers as $row)
    
             <tr>
              <td>{{ $i }}</td>
                              
      <td><a href="{{url('customer/detail/'.$row['id'])}}">{{$row['customer_name']}}</a></td>
      <td>{{$row['phone_no']}}</td>
      <td>{{$row['address']}}</td>
      <td>{{$row['vehicle']}}</td>
      <td>{{$row['NRC']}}</td>
      <td>{{$row['additional_notes']}}</td>
      <td><a href="{{url('customer/edit/'.$row['id'])}}">edit</a></td>
      <td><a href="{{url('customer/delete/'.$row['id'])}}" onclick="return confirm('Are you sure you want to delete?')">delete</a></td>
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