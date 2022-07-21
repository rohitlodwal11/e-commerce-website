<?php

namespace App\Http\Controllers;

use App\Models\Front;
use App\Models\Product;
use App\Models\Slide;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Support\FacaDes\DB;


use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {  
        $Product = Product::all()->where('status', 1);
        $slide  = Slide::all()->where('status',1);
        $pro = Product::all()->where('trending',1);
    return view('project layout.base',compact('Product','slide','pro'))->with('no',1);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id){
        $product = DB::table('products')->where('id',$id)->first();
        return view('project.product view',compact('product'))->with('no',1);

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
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function show(Front $front)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function edit(Front $front)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Front $front)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function destroy(Front $front)
    {
        //
    }
    public function shop(){
        $products = Product::all()->where('status', 1);
        $pro = Product::all()->where('trending', 1);

        return view('project.shop',compact('products','pro'))->with('no',1);
    }
   public function contact(){
       return view('project layout.contact');
   }
   public function contactpost(Request $request){
     $request->validate([
  'name' => 'required',
  'email' => 'required',
  'number' => 'required',
  'comment' => 'required',
     ]);
    $contact = new Contact();
    $contact->name = $request->input('name');
    $contact->email = $request->input('email');
    $contact->number = $request->input('number');
    $contact->comment = $request->input('comment');
    $contact->save();
    return redirect('/')->with('status','contact as succes');
   }
   public function about(){
       return view('project layout.about');
   }
   public function productlist(){

    $products = Product::select('name')->where('status',1)->get();
    $data=[];
    foreach($products as $item){
        $data[] = $item['name'];
    }
    return $data;
   }
   
   public function product(Request $request){
    $serched_product = $request->search;
    if($serched_product != ""){
        $product = Product::where("name","LIKE","%$serched_product%")->first();
        if($product){
            return redirect('detail/'.$product->id);
        }else{
            return redirect()->back()->with('status','no searched producct');
        }
    }else{
        return redirect()->back();
    }


   }
}
