<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Service;
use  App\Models\Customer;
use  App\Models\Vehicle;



class HomeViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $result['services']=Service::where('deleted',0)->get()->toarray();
        return view('HomeView.index',$result);

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

         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function customer_select(Request $request)
    {
        //
        
         $service=$request->input('service_id');
        // $result ['service'] = Service::where('id',$service)->get()->toArray();
         // echo $service;

  //return view('HomeView.customer_select')->with ('service',$service);
  // return view('HomeView.customer_select',$result);
          // dd($service);
         return view('HomeView.customer_select',['id'=>$service]);
        

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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  //   public function pagination()
  //   {
  //       //
  //       // $services = DB::table('services')->paginate(15);
  //        $services = Service::paginate(15);

  //       return view('HomeView.pagination', ['service' => $services]);

  // }
    public function customer_search(Request $request){

// $q = Input::get ( 'q' );
         // $q = $_GET['q'];
$search=$request->input('q');
// dd($search);
$service=$request->input('service_id');

    
            
if($search != ""){

 $searchname = Customer::where ( 'customer_name' , 'LIKE', '%' . $search . '%' )->get();




// $searchname = Customer::whereHas('vehicle', function ($query) {
//     $query->where('customer_name', 'LIKE', '%'.$search.'%')->orWhere('vehicle_number', 'LIKE', '%'.$search.'%');
// })->get();


   
// $searchname ['vehicle']= Vehicle::where ( 'vehicle_number', 'LIKE', '%' . $search . '%' )->get();
//     $searchname=Customer::whereHas('vehicle',function($query) use ($search){
//         $query->where(' ' , 'LIKE', '%' . $search . '%' );
//     })->with(['vehicle' => function($query) use ($search){
//         $query->where('vehicle_number', 'like', '%'.$search.'%');
//     }])->get();




 //  $searchname=Customer::whereHas('vehicle',function($query) use ($search){
    //     $query->where('customer_name' , 'LIKE', '%' . $search . '%' );
    // })->orWhere('vehicle_number', 'like', '%'.$search.'%')->get();

// $pagination = $user->appends ( array ('q' => Input::get ( 'q' ) ) );
if (!empty ($searchname ))
      // dd($searchname);

return view ( 'HomeView.customer_select',['id'=>$service] )->withDetails ( $searchname )->withQuery ( $search );
}
return view ( 'Homeview.customer_select' )->withMessage ( 'No Details found. Try to search again !' );
}
    
}

