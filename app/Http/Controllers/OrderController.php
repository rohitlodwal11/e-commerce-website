<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use App\Models\Cart;
use App\Models\OrderItem;
use App\Models\Ragister;
use Illuminate\Support\FacaDes\DB;


use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $s = session()->get('USER_ID');
        $cartItem = Cart::where('USER_ID',$s)->get();
        return view('project.checkout',compact('cartItem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {      $s = session()->get('USER_ID');
         $orderItem = OrderItem::where('USER_ID',$s)->get();

        return view('project.order details',compact('orderItem'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   {   

        $id = $request->input('id');
        $prod_id = $request->input('prod_id');
    
        $order = new Order();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->add = $request->input('add');
        $order->country = $request->input('country');
        $order->code = $request->input('code');
        $order->city = $request->input('city');
        $order->payment_id = $request->input('payment_id');
        $order->payment_mode = $request->input('payment_mode');

        $order->save();
        $s = session()->get('USER_ID');
       $cartItem = Cart::where('USER_ID',$s)->get();
        foreach($cartItem as $item){
            $orderItem = new OrderItem();
               
                $orderItem->order_id =  $order->id;
                $orderItem->prod_id  =  $item->prod_id;
                $orderItem->qty      =  $item->prod_qty;
                $orderItem->price    =  $item->products->price;
               $orderItem->save();
               $cartItem = Cart::where($id)->get();
               Cart::destroy($cartItem);
         if($request->input('payment_mode')=='rezorpay payment'){
             return response()->json(['status'=>'order created succesfully']);
         }
         
               return redirect('/thank')->with('status','order creted succesfully');
           
       }

       

    }


    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
    public function order(){
        $o = session()->get('USER_ID');
        $order = Order::where('USER_ID',$s)->get();
        return view('project.order-view',compact('order'));
    }
    public function addrezorpay(Request $request){
        $o = session()->get('USER_ID');
        $cartItem = Cart::where('USER_ID',$o)->get();
        $total =0;
        $qty=0;
        foreach($cartItem as $item){
            $total += $item->products->price*$item->prod_qty;
            $qty += $item->prod_qty*50;
             $alltotal = $total+$qty;
        }
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $add = $request->input('add');
        $country = $request->input('country');
        $code = $request->input('code');
        $city = $request->input('city');
        return response()->json([

            'fname' => $fname,
            'lname' => $lname,
            'email' => $email,
            'phone' => $phone,
            'add' => $add,
            'country' => $country,
            'code' => $code,
            'city' => $city,
            'alltotal' =>  $alltotal,
        ]);
    }
    public function thankyou(){
        return view('project.thankyou');
    }
}
