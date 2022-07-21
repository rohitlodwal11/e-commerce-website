<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\FacaDes\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
    $categories = category::all()->where('status',1);
       return view('admin.Category', compact('categories'))->with('no',1);
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
//     
public function store(Request $request)
    { $request->validate([
    'name' => 'required',
    'image' => 'required:jpg,png',

    ]);
        if($request->hasFile('image')) {
$ImageName = time().'.'.$request->image->extension();
$test = $request->image->move(public_path('category'), $ImageName);
}else{
$ImageName = 'none.png';
}
$category = new Category();
$category->name = $request->input('name');
$category->image= $ImageName;
$category->save();
$categories = category::all()->where('status',1);
       return view('admin.Category', compact('categories'))->with('no',1);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
       
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
  public function edit($id)
    {
    
        $sl = Category::find($id);
        return response()->json([
            'status'=>200,
            'sl'=>$sl
        ]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->status=0;
        $category->delete();
       $categories = category::all()->where('status',1);
       return view('admin.Category', compact('categories'))->with('no',1);
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
   

    public  function update_category(request $request){

        $category = new Category;
        $id = $request->input('id');
        $category = Category::find($id);
        
        if($request->hasFile('image')) {
            $categoryImageName = time().'.'.$request->image->extension();
            $test = $request->image->move(public_path('category'), $categoryImageName);
        }
         if($request->hasFile('image')==""){
            $categoryImageName =  $request->input('old_image');
        }

        $category->id = $request->input('id');
        $category->name = $request->input('name');
        $category->image = $categoryImageName;
        
        $category->update();
        $categories = category::all()->where('status',1);
       return view('admin.Category', compact('categories'))->with('no',1);
    }
}
