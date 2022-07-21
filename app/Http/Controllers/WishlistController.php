<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\FacaDes\Session;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   $s = session()->get('USER_ID');
         $wish = Wishlist::where('USER_ID',$s)->get();
        return view('project.wishlist',compact('wish'));
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
    {      $product_id = $request->input('product_id');
         $s = $request->session()->get('USER_ID');
        $wishlist = new Wishlist();
        $wishlist->prod_id = $product_id;
        $wishlist->user_id = $s;
        $wishlist->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {    
        $wish = Wishlist::find($id);
        $wish->status=0;
        $wish->delete();
        return redirect('wishlist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wishlist $wishlist)
    {
        //
    }
    public function wishcount(){
        $s = session()->get('USER_ID');
        $wishcount = Wishlist::where('USER_ID',$s)->count();
        return response()->json(['count'=>$wishcount]);
    }
}
