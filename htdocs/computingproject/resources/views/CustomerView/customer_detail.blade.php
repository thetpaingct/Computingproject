@extends('layouts.app')

@section('css')



@endsection
@section('content')


<div class="container-fluid">
<div class="col-md-8 col-md-offset-2" style="padding-top: 10px;">
<legend><h1>Customer details</h1></legend>
<div class="col-md-6">
<div class="col-md-10">
 <div class="row">
  <div class="col-md-6">
   <p style="font-size: 130%;  ">Customer Name :</p>
   </div>
    <div class="col-md-6">
   <p style="font-size: 130%; text-align: left; font-style: oblique;">{{$customers->customer_name}}</p>
   </div>
 </div>       

<div class="row">
  <div class="col-md-6">
   <p style="font-size: 130%;">Phone Number :</p>
   </div>
    <div class="col-md-6">
   <p style="font-size: 130%; text-align: left; font-style: oblique;">{{$customers->phone_no}}</p>
   </div>
 </div> 

 <div class="row">
  <div class="col-md-6">
   <p style="font-size: 130%;">Gmail :</p>
   </div>
    <div class="col-md-6">
   <p style="font-size: 130%; text-align: left; font-style: oblique;">{{$customers->gmail}}</p>
   </div>
 </div>

 <div class="row">
  <div class="col-md-6">
   <p style="font-size: 130%;">Address :</p>
   </div>
    <div class="col-md-6">
   <p style="font-size: 130%; text-align: left; font-style: oblique;">{{$customers->address}}</p>
   </div>
 </div>

 

</div>
</div>


<div class="col-md-6">
        
<div class="col-md-10">
<div class="row">
  <div class="col-md-6">
   <p style="font-size: 130%;">NRC :</p>
   </div>
    <div class="col-md-6">
   <p style="font-size: 130%; text-align: left; font-style: oblique;">{{$customers->NRC}}</p>
   </div>
 </div>

<div class="row">
  <div class="col-md-6">
   <p style="font-size: 130%;">Vehicles :</p>
   </div>
    <div class="col-md-6">
   <p style="font-size: 130%; text-align: left; font-style: oblique;">{{$customers->vehicle}}</p>
   </div>
 </div>

 <div class="row">
  <div class="col-md-6">
   <p style="font-size: 130%;">Additional notes :</p>
   </div>
    <div class="col-md-6">
   <p style="font-size: 130%; text-align: left; font-style: oblique;">{{$customers->additional_notes}}</p>
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
