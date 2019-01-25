<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
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
        // dd($result);
        return view('admin.service_create',$result);
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
$validatedData=$this->validate($request,[
            'service_name' => 'required|string',
            'service_price' => 'required|integer',
            
        ]);
 // dd($request);
        if($validatedData){
            $services=new Service();
            $services->service_type=$request->input('service_name');
            $services->service_name=$request->input('service_name');
            $services->service_price=$request->input('service_price');
         
            $services->save();
             $result['services']=Service::get()->toarray();
            // dd($services);
            // Session::flash("register","Successfully Registered!.");
            return redirect('service/create');
            
           
        }
        else{
             dd($validatedData);
             return redirect('service/create')->withErrors($validatedData);
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
         $result['services']=Service::where('id',$id)->first()->toarray();
return view('admin.service_edit',$result);
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
         $data = $request->input();
        // dd($data);
        $service=Service::where('id',$id)->first();
        $service->service_name=$request->input('service_name');
        $service->service_type=$request->input('service_type');
        $service->service_price=$request->input('service_price');
        $service->save();
        return redirect('service/create');
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
    public function delete($id)
    {
        $delete=Service::where('id',$id)->first();
        $delete->deleted=1;
        $delete->save();
        return redirect('service/create');

    }

    public function deletedsize()
    {
        
        $result['deletes']=Size::where('deleted',1)->get()->toarray();
        //dd($result['deletes']);
        return view('size.deleted_view',$result);
       
       
         
    }
}
