<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Support\FacaDes\DB;

use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $subCategory = SubCategory::all()->where('status',1);
     $Category = Category::all()->where('status',1);

        return view('admin.SubCategory',compact('subCategory', 'Category'))->with('no',1);
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //    $request->validate([
     //   'category' => 'required',
     // //  'sub_category' => 'required',
     //   'image' => 'required:jpg,bmp,png',
     //    ]);
        if($request->hasFile('image')) {
$ImageName = time().'.'.$request->image->extension();
$test = $request->image->move(public_path('SubCategory'), $ImageName);
}else{
$ImageName = 'none.png';
}
$SubCategory = new SubCategory();
$SubCategory->category_id = $request->input('category_id');
$SubCategory->subcategory_name = $request->input('subcategory_name');
$SubCategory->image= $ImageName;
$SubCategory->save();
 $subCategory=SubCategory::all()->where('status',1);
     $Category = Category::all()->where('status',1);

        return view('admin.subCategory',compact('subCategory', 'Category'))->with('no',1);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(subCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sl = subCategory::find($id);
        return response()->json([
            'status'=>200,
            'sl'=>$sl
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subCategory = SubCategory::find($id);
        $subCategory->status=0;
        $subCategory->delete();
        return redirect('subCategory')->with('status','Subcategory has been deleted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(subCategory $subCategory)
    {
        //
    }
   public  function update_category(request $request){

        $subcategory = new subCategory;
        $id = $request->input('id');
        $subcategory = subCategory::find($id);
        
        if($request->hasFile('image')) {
            $categoryImage = time().'.'.$request->image->extension();
            $test = $request->image->move(public_path('subCategory'), $categoryImage);
        }
         if($request->hasFile('image')==""){
            $categoryImage =  $request->input('old_image');
        }

        $subcategory->id = $request->input('id');
        $subcategory->category_id = $request->input('category_id');
        $subcategory->subcategory_name = $request->input('subcategory_name');

        $subcategory->image = $categoryImage;
        
        $subcategory->update();
        $subCategory = subCategory::all()->where('status',1);
     $Category = Category::all()->where('status',1);

        return view('admin.subCategory',compact('subCategory', 'Category'))->with('no',1);
    }

}
