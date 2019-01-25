<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Account;
 use Auth;

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
        return view('auth.login');
    }

     public function login(Request $request)
    {
        //

        $validatedData = $this->validate ($request,[ 'email'=> 'required' , 'password'=>'required']);

        // $validatedData = $this->validate ($request,['name' => 'required']);
        // $validate = Validator::make(Input::all(),$rules);
        
       if($validatedData){
        return Redirect::to('/')->withErrors($validator);
       }else{
        $userdata = array('email'=>$request->input('email'),'password'=>$request->input('password'));
        if(Auth::attempt($userdata)){
            $role_id=Auth::user()->role_id;

 
            if($role_id=2){

                  return view('home');
                  
              }else{

              }
          

        }
        else{
            // return "fail";
             return view('home');
        }
       }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      return view('auth.register');
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
        
           $validatedData = $this->validate ($request,['name' => 'required' , 'email'=> 'required' , 'password'=>'required|confirmed']);
     
        if($validatedData){
            // dd("world");
            return redirect('register')->withErrors($validatedData);
        }
        else
        {
            
            $account = new Account();
            $account->name = $request->input('name');
              $account->email = $request->input('email');
                $account->password = bcrypt($request->input('password'));

                $account->role_id=2;
            $account->save();
            return redirect('register');
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
}
