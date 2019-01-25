<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Customersattitude;
use  App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
         $result['customerattitude']=Customersattitude::get()->toarray();
        return view('CustomerView.customer',$result);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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



switch ($request->input('action')) {
        case 'save':
            // Save model
$data = $request->input();
 //dd($data);

  $validatedData=$this->validate($request,[
            'customer_name' => 'required|string|max:255',
            'phone_number' => 'required|numeric',
            'gmail'=>'required|string|email|unique:customers|max:255',
            'NRC' => 'required|string|max:255',
            'vehicle' => 'required|string|max:255',
            'address' => 'required|string|max:255',          

        ]);
  if($validatedData){
     // dd('erwe');
$customer = new Customer();
// $vehicle = new Vehicle();

$customer->customer_name = $request->input('customer_name');
$customer->NRC = $request->input('NRC');
$customer->phone_no = $request->input('phone_number');
$customer->gmail = $request->input('gmail');
$customer->additional_notes = $request->input('additional_notes');
$customer->customer_at_id = $request->input('customerattitude');
$customer->address = $request->input('address');
$customer->vehicle = $request->input('vehicle');

$customer->save();
$result['customers']=Customer::get()->toarray();

// $vehicle->vehicle_number = $request->input('vehicle_number');

 // dd($order);
return view('CustomerView.customer_list',$result);
            break;
            }
        else{
             //dd($validatedData);
             return redirect('customer/create')->withErrors($validatedData);
        }

        case 'saveandcontainuous':
            // Preview model
        $data = $request->input();
 //dd($data);
        $validatedData=$this->validate($request,[
            'customer_name' => 'required|string|max:255',
            'phone_number' => 'required|numeric',
            'gmail'=>'required|string|email|unique:customers|max:255',
            'NRC' => 'required|string|max:255',
            'vehicle' => 'required|string|max:255',
            'address' => 'required|string|max:255',  
        ]);
        if($validatedData){
$customer = new Customer();
// $vehicle = new Vehicle();

$customer->customer_name = $request->input('customer_name');
$customer->NRC = $request->input('NRC');
$customer->phone_no = $request->input('phone_number');
$customer->gmail = $request->input('gmail');
$customer->additional_notes = $request->input('additional_notes');
$customer->customer_at_id = $request->input('customerattitude');
$customer->address = $request->input('address');
$customer->vehicle = $request->input('vehicle');

$customer->save();

// $vehicle->vehicle_number = $request->input('vehicle_number');

 // dd($order);
return redirect('/');
            break;
 }
        else{
             //dd($validatedData);
             return redirect('customer/create')->withErrors($validatedData);
        }
        
    }  
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
        $result['customers']=Customer::where('id',$id)->first();
      $result['customerattitude']=Customersattitude::get()->toarray();
         // dd($result);
       
        return view('CustomerView.customer_edit',$result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $customers=Customer::where('id',$id)->first();
        // dd($order);
       $customers->customer_name = $request->input('customer_name');
$customers->NRC = $request->input('NRC');
$customers->phone_no = $request->input('phone_number');
$customers->gmail = $request->input('gmail');
$customers->additional_notes = $request->input('additional_notes');
$customers->customer_at_id = $request->input('customerattitude');
$customers->address = $request->input('address');
$customers->vehicle = $request->input('vehicle');
        $customers->save();
        return redirect('customer/list');
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
    public function list()
    {
        //
       $result['customers']=Customer::where('deleted',0)->get()->toarray();


return view('CustomerView.customer_list',$result);
    }
    public function detail($id)
    {
        //
      
         $customers=Customer::where('id',$id)->first();
       // dd ($request['customer']['id']);
      return view('CustomerView.customer_detail',['customers'=>$customers]);
    }
     public function delete($id)
    {
        $delete=Customer::where('id',$id)->first();
        $delete->deleted=1;
        $delete->save();
        return redirect('customer/list');

    }

    // public function deletedsize()
    // {
        
    //     $result['deletes']=Size::where('deleted',1)->get()->toarray();
    //     //dd($result['deletes']);
    //     return view('size.deleted_view',$result);    
         
    // }
}
