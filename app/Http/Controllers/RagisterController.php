<?php

namespace App\Http\Controllers;

use App\Models\Ragister;
use Illuminate\Http\Request;
use Illuminate\Support\FacaDes\DB;

class RagisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Auth.signup');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password'=> 'required|confirmed',
            
        ]);
        $ragister = new Ragister();
        $ragister->name = $request->input('name');
   
        $ragister->email = $request->input('email');
        $ragister->password = $request->input('password');
        $ragister->save();
        return redirect('/')->with('status','ragister has succesfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ragister  $ragister
     * @return \Illuminate\Http\Response
     */
    public function show(Ragister $ragister)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ragister  $ragister
     * @return \Illuminate\Http\Response
     */
    public function edit(Ragister $ragister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ragister  $ragister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ragister $ragister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ragister  $ragister
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ragister $ragister)
    {
        //
    }
    public function signup(Request $request){
        $request->validate([
       'email' => 'required',
       'password' => 'required',
       'remember' => 'required',
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->input('remember');

        $result = DB::table('ragisters')
        ->where('email',$email)
        ->where('password',$password)
        
        ->get();
        if(isset($result[0]->id)){
            if($result[0]->status==1){
                $request->session()->put('USER_ID',$result[0]->id);
                $request->session()->put('USER_NAME',$result[0]->name);
                return redirect('/');

            }
            else{
                $request->session()->flash('msg', 'Your Account has been deactivated');
                return view('Auth.login');
            }
        }
        else{
             $request->session()->flash('msg', 'Pleash enter your email');
                return view('Auth.login');
        }
    }
   
    
}
