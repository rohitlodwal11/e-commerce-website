<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $slide = Slide::all()->where('status',1);
        return view('admin.slide',compact('slide'))->with('no',1);
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
        if($request->hasFile('image')) {
            $ImageName = time().'.'.$request->image->extension();
            $test = $request->image->move(public_path('slide'), $ImageName);
            }else{
            $ImageName = 'none.png';
            }
            $slide = new Slide();
            $slide->slide = $request->input('slide');
            $slide->price = $request->input('price');
            $slide->title = $request->input('title');
            $slide->image =  $ImageName;
            $slide->save();
            return redirect('/slide')->with('status','slide success');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sl = Slide::find($id);
        return response()->json([
            'status'=>200,
            'sl'=>$sl
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slide = Slide::find($id);
        $slide->status=0;
        $slide->delete();
        return redirect('slide');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        
    }
    public function updateslide(Request $request){
        $id = $request->input('id');
        $slide = Slide::find($id);
        
        if($request->hasFile('image')) {
            $slideImage = time().'.'.$request->image->extension();
            $test = $request->image->move(public_path('slide'), $slideImage);
        }
         if($request->hasFile('image')==""){
            $slideImage =  $request->input('old_image');
        }

         $slide->id = $request->input('id');
         $slide->slide = $request->input('slide');
         $slide->price = $request->input('price');
         $slide->title = $request->input('title');


         $slide->image = $slideImage;
        
         $slide->update();
       return redirect('slide');

        
    }
}