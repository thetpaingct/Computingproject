<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Note;
use Auth;

class NotesController extends Controller
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
        $result['notes']=Note::where($matchThese)->get()->toarray();
        return view("HomeView.note",$result);
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
         $data = $request->input();
        // dd($data);
        $notes = new Note();
$accountid ="5";
$notes->note = $request->input('note');
// $todolists->note = $request->input('note');
$accountid = Auth::id();
// dd($accountid);
$notes->account_id = $accountid;
// $todolist->account_id = $request->input('NRC');


$notes->save();

   $matchThese = ['deleted'=>0 , 'account_id' => $accountid];
        $result['notes']=Note::where($matchThese)->get()->toarray();
// dd($result);

return view('HomeView.note',$result);
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
         $result['notes']=Note::where('id',$id)->first();
     
         // dd($result);
       
        return view('HomeView.note_edit',$result);
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
         $note=Note::where('id',$id)->first();
        // dd($order);
       $note->note = $request->input('note');

        $note->save();
        return redirect('note');
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
        $delete=Note::where('id',$id)->first();
        $delete->deleted=1;
        $delete->save();
        return redirect('note');
    }
}
