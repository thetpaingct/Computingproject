<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      $result ['authors'] = Author::get()->toArray();
        return view('author.list',$result);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $result ['authors'] = Author::get()->toArray();
        // return view('author',$result);
         return view('author.create');

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


 $validatedData = $this->validate ($request,['name' => 'required|unique:authors']);
       // dd($validatedData);
//'dob' => 'date_format:"d-m-Y"|required'
        if($validatedData){
            return redirect('publishinghouse/create')->withErrors($validatedData);
        }else{
          $author = new Author();
        $author->name = $request->input('name');
        $author->phone_no = $request->input('phonenumber');
        $author->gender = $request->input('gender');
        $author->dob = $request->input('dob');
        $author->address =$request->input('address');
        $author->email =$request->input('gmail');
        $author->save();
           return redirect('author');
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
        // dd($id);
        $result ['author'] = Author::where('id',$id)->first()->toArray();
        // dd($result);
        return view('author.update',$result);
        // dd('hello');
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
         $author = Author::where('id',$id)->first();
        $author->name = $request->input('name');
        $author->phone_no = $request->input('phonenumber');
        $author->gender = $request->input('gender');
        $author->dob = $request->input('dob');
        $author->address =$request->input('address');
        $author->email =$request->input('gmail');
        $author->save();
        return redirect('author');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $author = Author::find($id);
         $author->delete();
          return redirect('author');
    }
}
