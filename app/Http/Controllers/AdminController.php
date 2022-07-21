<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Order;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Ragister;
use Illuminate\Http\Request;
use Illuminate\Support\FacaDes\DB;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.loginee');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.view');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
    public function login(Request $request){
       $email = $request->input('email');
        $password = $request->input('password');
        $result = DB::table('users')
        ->where('email',$email)
        ->where('password',$password)
        ->get();
        if(isset($result[0]->id)){
            if($result[0]->status==1){
                $request->session()->put('USER_ID',$result[0]->id);
                $request->session()->put('USER_NAME',$result[0]->name);
                return redirect('/dashboard');

            }
            else{
                $request->session()->flash('msg', 'Your Account has been deactivated');
                return redirect('/login');
            }
        }
        else{
             $request->session()->flash('msg', 'Pleash enter your email');
                return redirect('/login');
        }
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function ordercount(){
         $order = Order::all()->where('status',1)->count();
        return response()->json(['count'=>$order]);
    } 
    public function categorycount(){
        $cat = Category::all()->where('status',1)->count();
       return response()->json(['count'=>$cat]);
   } 
   public function productcount(){
    $product = Product::all()->where('status',1)->count();
   return response()->json(['count'=>$product]);
} 
public function subcount(){
    $sub = SubCategory::all()->where('status',1)->count();
   return response()->json(['count'=>$sub]);
} 
public function usercount(){
    $tt = Ragister::all()->where('status',1)->count();
   return response()->json(['count'=>$tt]);
} 
       }