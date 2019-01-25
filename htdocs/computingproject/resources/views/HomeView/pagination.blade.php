@extends('layouts.app')

@section('css')



@endsection
@section('content')
<div class="container">
@if(isset($service))
<h2>Sample User details</h2>
<table class="table table-striped">
<thead>
<tr>
<th>Name</th>

</tr>
</thead>
<tbody>
@foreach($service as $dummy)
<tr>
<td>{{$dummy->name}}</td>

</tr>
@endforeach
</tbody>
</table>
{!! $service->render() !!}@endif
</div>
@endsection
