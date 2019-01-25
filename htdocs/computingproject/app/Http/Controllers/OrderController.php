<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use  App\Models\Service;
 use  App\Models\Customer;
 use  App\Models\Statement;
 use  App\Models\location;
  use  App\Models\Vehicle;
  use  App\Models\Order;
  use DateTime;
  use Carbon\Carbon;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id , $service_id)
    {
        //
         // $cus_id=$customer_id->input('id');
        // dd($id);
         // $result ['customer'] = Customer::where('id',$id)->with('vehicle')->get()->toArray();
          // $result ['vehicle'] = Vehicle::where('id',$id)->first()->toArray();
        //  $result ['service'] = Service::where('id',$service_id)->first()->toArray();
        //  $result ['statement'] = Statement::get()->toArray();
        // $result ['location'] = Location::get()->toArray();
 $customers = Customer::where('id',$id)->first();
 // $vehicles=Vehicle::where('customer_id',$id)->first();
 $services = Service::where('id',$service_id)->first();
 $statements = Statement::get();
 $locations = Location::get();
//  dd($customers->vehicle->vehicle_number);
// dump($customers);
// dump($services);
// dump($statements);
// dd($locations);
            // dd($customers);
        // return view('OrderView.order',$result);
        return view('OrderView.order',[
            'customers'=>$customers,
            'services'=>$services,
            'statments'=>$statements,
            'locations'=>$locations,
            // 'vehicles'=>$vehicles
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $result['orders']=Order::with('customer','statement','location','service')->where('deleted',0)->get()->toarray();
         // $result ['books'] = Book::get()->toArray();
        //dd($result);
        return view('OrderView.order_list',$result)->withMessage('msg','Message');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

 // $ff = $request->input();
 // dd($ff);

$now = Carbon::now()->toDateString();
$order = new Order();
$order_recieve_inputdate ="Not yet";

$order->order_date = $now;
$order->order_recieve_date = $now;
$order->order_giveback_date = $now;
$order->extra_note = $request->input('extra_note');
$order->customer_id = $request->input('customer_id');
$order->service_id = $request->input('service_id');
$order->statement_id = $request->input('statement_id');
$order->location_id = $request->input('location_id');

$order->save();
 // dd($order);
return redirect('order/submit');
// $order->statements = 
// $order->

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $result['orders']=Order::where('id',$id)->first();
       $result ['locations'] = Location::get()->toArray();
        $result ['statements'] = Statement::get()->toArray();
        // dd($result);
       
        return view('OrderView.order_update',$result);
}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $id ,Request $request)
    {
        //
       
   $order=Order::where('id',$id)->first();
        $order->statement_id=$request->input('statement_id');
        $order->location_id=$request->input('location_id');
        $order->save();
        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function detail($id)
    {
        //
       $request=Order::where('id',$id)->with('customer','statement','location')->first()->toArray();
         $orders=Order::where('id',$id)->first();
       // dd ($request['customer']['id']);
      return view('OrderView.order_detail',['orders'=>$orders]);
    }
    public function delete($id)
    {
        $delete=Order::where('id',$id)->first();
        $delete->deleted=1;
        $delete->save();
        return redirect('order/submit');

    }
}
