<?php

namespace App\Http\Controllers;
use App\Models\Product;

use App\Models\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\FacaDes\Auth;
use Illuminate\Support\FacaDes\Session;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
    public function AddProduct(Request $request){
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');
        
        $v = $request->session()->get('USER_ID');
 
        // Via the global "session" helper...
     
        
          $cartItem = new Cart();
          $cartItem->prod_id = $product_id;
          $cartItem->user_id =  $v;
          $cartItem->prod_qty =$product_qty;
          $cartItem->save();
         return redirect('/cart')->with('status','cart added');
        
      }
       public function cartview(){

          $v = session()->get('USER_ID');
           $cartItem = Cart::where('USER_ID',$v)->get();
           return view('project.cart',compact('cartItem'));

       }
       public function cartdelete($id){

           $cartItem = Cart::find($id);
           $cartItem->status=0;
           $cartItem->delete();
          
           return redirect('cart')->with('status','Cart has been deleted ');
       }
       public function updatecart(Request $request){
           $prod_id = $request->input('prod_id');
           $prod_qty = $request->input('prod_qty');
           $s = session()->get('USER_ID');
           $cart = Cart::where('prod_id',$prod_id)->where('USER_ID',$s)->get()->first();
           $cart->prod_qty = $prod_qty;
           $cart->update();
           return redirect('/');
       }
       public function cartcount(){
        $v = session()->get('USER_ID');
        $cartcount = Cart::where('USER_ID',$v)->count();
        return response()->json(['count'=>$cartcount]);
    }        
   
    
}