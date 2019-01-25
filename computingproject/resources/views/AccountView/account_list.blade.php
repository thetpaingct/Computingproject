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
  
  <div class="row" style="margin-bottom: 10px; margin-top: 20px;">
    <table id="example" class="display" width="100%" cellspacing="0" >
  <thead>
    <tr>
      <th>Account ID</th>
      <th>Account name</th>
      <th>Account Gmail </th>
     
      <th>Delete</th>
      
    </tr>
  </thead>
  <tbody>
      @php $i=1; @endphp
    @foreach($accounts as $row)
    
             <tr>
              <td>{{ $i }}</td>
                              
      <td>{{$row['name']}}</a></td>
    
      <td>{{$row['email']}}</td>
     
      <td><a href="{{url('account/delete/'.$row['id'])}}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
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