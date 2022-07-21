<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\FacaDes\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      $products = Product::all()->where('status', 1);
        

     $categories = Category::all()->where('status',1);
     $subCategory = SubCategory::all()->where('status', 1);
        return view('admin.product',compact('products','categories','subCategory'))->with('no',1);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\response
     */
    public function store(Request $request)
    {
         if($request->hasFile('image')) {
$ImageName = time().'.'.$request->image->extension();
$test = $request->image->move(public_path('product'), $ImageName);
}else{
$ImageName = 'none.png';
}
$product = new Product();
$product->category_id = $request->input('category');
$product->subcategory_id = $request->input('subcategory');
$product->name = $request->input('name');
$product->brand = $request->input('brand');
$product->price = $request->input('price');
$product->sell_price = $request->input('sell_price');
$product->qty = $request->input('qty');
$product->trending = $request->input('trending');
$product->image= $ImageName;
$product->save();
  $products = Product::all()->where('status', 1);
        

     $categories = Category::all()->where('status',1);
     $subCategory = SubCategory::all()->where('status', 1);
        return view('admin.product',compact('products','categories','subCategory'))->with('no',1);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = DB::table('products')->where('id',$id)->where('status',1)->first();
        return view('admin.Show',compact('product'))->with('no',1);
          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $sl = product::find($id);
        return response()->json([
            'status'=>200,
            'sl'=>$sl
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $product = Product::find($id);
        $product->status=0;
        $product->delete();
        return redirect('subCategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
    public function product_update(Request $request){
      //$product = new Product;
        $id = $request->input('id');

         $product = Product::find($id);
         if($request->hasFile('image')) {
            $productImage = time().'.'.$request->image->extension();
            $test = $request->image->move(public_path('product'), $productImage);
        }
         if($request->hasFile('image')==""){
            $productImage =  $request->input('old_image');
        }
        $product->id = $request->input('id');
        $product->category_id = $request->input('category');
        $product->subcategory_id = $request->input('subcategory');
        $product->name = $request->input('name');
        $product->brand = $request->input('brand');
        $product->price = $request->input('price');
        $product->sell_price = $request->input('sell_price');
        $product->qty = $request->input('qty');
        $product->trending = $request->input('trending');


        $product->image = $productImage;
        $product->update();
       
    $products = Product::all()->where('status',1);
     $categories = category::all()->where('status',1);
     $subCategory = SubCategory::all()->where('status',1);

     return view('admin.product',compact('products','categories','subCategory'))->with('no',1);
    

}
    public function subCat($id)
    {
         
        
         
        $subCategory =SubCategory::where('category_id',$id)
                             
                              ->get();
                              $ok = [];
                              foreach ($subCategory as $key => $value) {
                                  
                              
                              $ok[$key] = '<option value="'.$value->id.'">'.$value->subcategory_name.'</option>';
                          }
        return response()->json($subCategory);
    } 
}
