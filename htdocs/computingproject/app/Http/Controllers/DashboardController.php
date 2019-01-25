<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Statement;
use  App\Models\Order;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result['statement']=Statement::get()->toarray();
            $result['orders']=Order::with('customer','statement','location','service')->where('deleted',0)->get()->toarray();

        return view('DashView.dashboard',$result);

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
    public function destroy($id)
    {
        //
    }
     public function search($id)
    {
        
        // dd($id);
        // $data = $id->input();
         $result['statement']=Statement::get()->toarray();
         $result['orders']=Order::with('customer','statement','location','service')->where('statement_id',$id)->where('deleted',0)->get()->toarray();
         // dd($result['orders']);
         return view('DashView.dashboard',$result);
    }
}
