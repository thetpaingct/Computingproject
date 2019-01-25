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
<form class="form-horizontal text-color-custom" method="get" role="form" action="{{ url('note/update/'.$notes['id'])}}">
	{{ csrf_field()}}
  
	 <div class="form-group">

		<label for="inputPassword3" class=" col-md-3 col-md-offset-2  control-label text-align-custom" style="padding-left: 100px; ">Note</label>
			<div class=" col-md-5 ">
				 <input   type="text" class="form-control" name="note" value="{{$notes->note}}">
			</div>
	</div>

	<div class="col-md-3 col-md-offset-7" style="padding-bottom: 50px;">								
	<button type="submit" class="btn btn-primary  panel-buttom-custom buttom-custom" id="button"  >Save</button>

	</div>

</form>
</div>
</div>	

</div>
</div>


@endsection