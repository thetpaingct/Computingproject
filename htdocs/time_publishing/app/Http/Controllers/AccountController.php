<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Account;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Session;
use Alert;
use Hash;
use Crypt;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         if(!Auth::check())
        {
            return view('auth.login');

        }
        else
        {
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        //
       $rules = array(
      'email'    => 'required|email',
      'password' => 'required'
      );
    $validator = Validator::make(Input::all(), $rules);
    if($validator->fails())
    {

      return Redirect::to('/login')->withErrors($validator);
    }
    else
    {
      $userdata = array(
        'email'     => $request->input('email'),
        'password'  =>$request->input('password')
        );

       // dd($userdata);
      if (Auth::attempt($userdata))
      {
       // $result=Auth::user()->role_id;
        
       //   $id=Auth::user()->id;
// 
return redirect('todolist');

 // if($result==1){

 //     Session::put('one', '1'); 
 //    // dd(session('key'));
 //                return redirect('todolist');
 //        }else {
 //            Session::put('two', '2'); 
 //             //dd(session('two'));
 //            return redirect('admin/view');
 //        }
    
           
      }
      else
      {


       // dd($userdata);
          return redirect()->back()->withInput();
         // return redirect('/');
      }
    }
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:accounts',
            'password' => 'required|string|min:6|confirmed',
        ]);
 // dd($request);
        if($validatedData){
            $accounts=new Account();
            $accounts->name=$request->input('name');
            $accounts->email=$request->input('email');
            $accounts->password=bcrypt($request->input('password'));
            // $accounts->phone_no=$request->input('phone_no');
             $accounts->role_id=1;
            $accounts->save();
            //dd($accounts);
            // Session::flash("register","Successfully Registered!.");
            return redirect('login');
            
           
        }
        else{
             //dd($validatedData);
             return redirect('register')->withErrors($validatedData);
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
    public function register(){
 return view('auth.register');
    }
     public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
