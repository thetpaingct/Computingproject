@extends('layouts.app')

@section('css')

<link href="{{ asset('sweetalert/css/sweetalert.css') }}" rel="stylesheet">


@endsection
@section('content')

<div class="container-fluid">
		<div class="col-md-10 col-md-offset-1  " style="padding-top: 10px;">
			<div class="row">
			<div class="col-md-7  col-md-offset-3">
				<legend>Service</legend>
			</div>
			</div>
	<div class="row">	
		<div class="col-md-7  col-md-offset-3">
<form class="form-horizontal text-color-custom" method="post" role="form" action="{{ url('todolist/create')}}">
	{{ csrf_field()}}
  <div class="form-group">

		<label for="inputPassword3" class=" col-md-3 col-md-offset-2  control-label text-align-custom" style="padding-left: 100px; ">To do list</label>
			<div class=" col-md-5 ">
				 <input   type="text" class="form-control" name="list" >
			</div>
	</div>
	

	<div class="col-md-3 col-md-offset-7" style="padding-bottom: 50px;">								
	<button type="submit" class="btn btn-primary  panel-buttom-custom buttom-custom" id="button"  >Save</button>

	</div>

</form>
</div>
</div>	
<div class="row">
	<div class="col-md-7  col-md-offset-3">
	<table class="table table-striped">
   <thead>
    <tr>
      <th>Number</th>
      <th>To Do List</th>

     <!--  <th>Finish</th> -->
      <th>Edit</th>
      <th>Delete</th>
      
    </tr>
  </thead>
  <tbody>
    @php $i=1; @endphp
		@foreach($todolists as $row)
		
             <tr>
              <td><a>{{ $i }}</td>
                          		
			<td>{{$row->list}}</td>
		
			<td><div class="checkbox">
     <!--  <label><input type="checkbox" value=""><a href="{{url('order/edit/'.$row['id'])}}">complete</a></label> -->
    </div></td>
			<!-- <td><a href="{{url('order/edit/'.$row['id'])}}">edit</a></td> -->
			<td><a href="{{url('todolist/edit/'.$row['id'])}}" ><button class="edit-modal btn btn-info" data-id="{{$row->id}}"
  							data-name="{{$row->list}}" data-toggle="modal" data-target="#basicModal">
  							 Edit
</button></td>
			<td><a href="{{url('todolist/delete/'.$row['id'])}}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
			
		</tr>
		@php $i++; @endphp
		@endforeach
  
  </tbody>
</table>
</div>
</div>
</div>
</div>

<div id="myModal" class="modal fade" id="basicModal"role="dialog">
  		<div class="modal-dialog">
  			<!-- Modal content-->
  			<div class="modal-content">
  				<div class="modal-header">
  					<button type="button" class="close" data-dismiss="modal">&times;</button>
  					<h4 class="modal-title"></h4>
  				</div>
  				<div class="modal-body">
  					<form class="form-horizontal" role="form">
  						<div class="form-group">
  							<label class="control-label col-sm-2" for="id">ID:</label>
  							<div class="col-sm-10">
  								<input type="text" class="form-control" id="fid" disabled>
  							</div>
  						</div>
  						<div class="form-group">
  							<label class="control-label col-sm-2" for="name">Name:</label>
  							<div class="col-sm-10">
  								<input type="name" class="form-control" id="n">
  							</div>
  						</div>
  					</form>
  					
  					<div class="modal-footer">
  						<button type="button" class="btn actionBtn" data-dismiss="modal">
  							<span id="footer_action_button" class='glyphicon'> </span>
  						</button>
  						<button type="button" class="btn btn-warning" data-dismiss="modal">
  							<span class='glyphicon glyphicon-remove'></span> Close
  						</button>
  					</div>
  				</div>
  			</div>
</div>
<script> 
$(document).ready(function() {
  $(document).on('click', '.edit-modal', function() {
        $('#footer_action_button').text("Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));
        $('#myModal').modal('show');
});

   $('.modal-footer').on('click', '.edit', function() {

        $.ajax({
            type: 'post',
            url: '/editItem',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#fid").val(),
                'name': $('#n').val()
            },
            success: function(data) {
                $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "' ><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
            }
        });
});

</script>

@endsection

@section('script')
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

@endsection