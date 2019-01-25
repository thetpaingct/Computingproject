<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publishinghouse;
use Illuminate\Support\Facades\Validator;

class PublishinghouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result ['publishinghouses'] = Publishinghouse::get()->toArray();
        return view('publishinghouse.list',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('publishinghouse.create');
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
         // $validatedData = $this->validate ($request,['name' => 'required|unique:genre']);
       // dd($validatedData);

        // if($validatedData){
        //     return redirect('publishinghouse/create')->withErrors($validatedData);
        // }else{
             $publishinghouse = new Publishinghouse();
        $publishinghouse->name = $request->input('name');
         $publishinghouse->save();
     
           return redirect('publishinghouse');
        // }
       
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
         $result ['publishinghouse'] = Publishinghouse::where('id',$id)->first()->toArray();
        // dd($result);
        return view('publishinghouse.update',$result);
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
        
         $publishinghouse = Publishinghouse::where('id',$id)->first();
        $publishinghouse->name = $request->input('name');
        $publishinghouse->save();
        return redirect('publishinghouse');

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
}
