@extends('layouts.app')

@section('css')



@endsection
@section('content')


<div class="container-fluid">
<div class="col-md-8 col-md-offset-2" style="padding-top: 10px;">
<legend><h1>Order details</h1></legend>
<div class="col-md-6">
<div class="col-md-10">
 <div class="row">
  <div class="col-md-6">
   <p style="font-size: 130%;  ">Customer Name :</p>
   </div>
    <div class="col-md-6">
   <p style="font-size: 130%; text-align: left; font-style: oblique;">{{$orders->customer->customer_name}}</p>
   </div>
 </div>       

<div class="row">
  <div class="col-md-6">
   <p style="font-size: 130%;">Phone Number :</p>
   </div>
    <div class="col-md-6">
   <p style="font-size: 130%; text-align: left; font-style: oblique;">{{$orders->customer->phone_no}}</p>
   </div>
 </div> 

 <div class="row">
  <div class="col-md-6">
   <p style="font-size: 130%;">Gmail :</p>
   </div>
    <div class="col-md-6">
   <p style="font-size: 130%; text-align: left; font-style: oblique;">{{$orders->customer->gmail}}</p>
   </div>
 </div>

 <div class="row">
  <div class="col-md-6">
   <p style="font-size: 130%;">Address :</p>
   </div>
    <div class="col-md-6">
   <p style="font-size: 130%; text-align: left; font-style: oblique;">{{$orders->customer->address}}</p>
   </div>
 </div>

 <div class="row">
  <div class="col-md-6">
   <p style="font-size: 130%;">NRC :</p>
   </div>
    <div class="col-md-6">
   <p style="font-size: 130%; text-align: left; font-style: oblique;">{{$orders->customer->NRC}}</p>
   </div>
 </div>

</div>
</div>


<div class="col-md-6">
        
<div class="col-md-10">
<div class="row">
  <div class="col-md-6">
   <p style="font-size: 130%;">Service :</p>
   </div>
    <div class="col-md-6">
   <p style="font-size: 130%; text-align: left; font-style: oblique;">{{$orders->service->service_name}}</p>
   </div>
 </div>

<div class="row">
  <div class="col-md-6">
   <p style="font-size: 130%;">Location :</p>
   </div>
    <div class="col-md-6">
   <p style="font-size: 130%; text-align: left; font-style: oblique;">{{$orders->location->location_name}}</p>
   </div>
 </div>

 <div class="row">
  <div class="col-md-6">
   <p style="font-size: 130%;">Statement :</p>
   </div>
    <div class="col-md-6">
   <p style="font-size: 130%; text-align: left; font-style: oblique;">{{$orders->statement->statement_type}}</p>
   </div>
 </div>

 <div class="row">
  <div class="col-md-6">
   <p style="font-size: 130%;">Order Date :</p>
   </div>
    <div class="col-md-6">
   <p style="font-size: 130%; text-align: left; font-style: oblique;">{{$orders->order_date}}</p>
   </div>
 </div>

 <div class="row">
  <div class="col-md-6">
   <p style="font-size: 130%;">Extra Note :</p>
   </div>
    <div class="col-md-6">
   <p style="font-size: 130%; text-align: left; font-style: oblique;" >{{$orders->extra_note}}</p>
   </div>
 </div>

</div>
</div>

</form>
</div>

 
</div>
<!-- container -->


<!-- </div> -->
@endsection
