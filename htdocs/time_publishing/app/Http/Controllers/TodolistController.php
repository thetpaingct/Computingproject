<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Todolist;
use Auth;
class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
$accountid = Auth::id();

$matchThese = ['deleted'=>0 , 'account_id' => $accountid];
        $result['todolists']=Todolist::where($matchThese)->get();
       
        return view("HomeView.index",$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
}
    public function store(Request $request)
    {
        //

        $data = $request->input();
        // dd($data);
        $todolists = new Todolist();
$accountid ="5";
$todolists->list = $request->input('list');
// $todolists->note = $request->input('note');
$accountid = Auth::id();
// dd($accountid);
$todolists->account_id = $accountid;
// $todolist->account_id = $request->input('NRC');


$todolists->save();

// $result['todolists']=Todolist::get()->toarray();
$matchThese = ['deleted'=>0 , 'account_id' => $accountid];
        $result['todolists']=Todolist::where($matchThese)->get();
// dd($result);

return view('HomeView.index',$result);
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
        $result['todolists']=Todolist::where('id',$id)->first();
     
         // dd($result);
       
        return view('HomeView.todolist_edit',$result);
    

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
        $todolist=Todolist::where('id',$id)->first();
        // dd($order);
       $todolist->list = $request->input('list');

        $todolist->save();
        return redirect('todolist');
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
        //
        $delete=Todolist::where('id',$id)->first();
        $delete->deleted=1;
        $delete->save();
        return redirect('todolist');
    }
}
