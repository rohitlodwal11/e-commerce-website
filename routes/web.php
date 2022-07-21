<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\RagisterController;
use App\Http\Controllers\SlideController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/front', function () {
// 				return view('');
// });

//cart



Route::get('/log',[RagisterController::class,'index']);  
Route::get('/signup',[RagisterController::class,'index']);  
Route::post('/sign',[RagisterController::class,'store']);  
Route::get('/log',[RagisterController::class,'create']);  
Route::post('/login-cart',[RagisterController::class,'signup']);  
//group

   Route::group(['middleware' => ['login']],function(){

    Route::get('/',[FrontController::class,'index']);
	Route::get('/logeed',function(){
		session()->forget('USER_ID');
		return view('Auth.login');
	});
	Route::get('detail/{id}',[FrontController::class,'create']);
	Route::get('/shop',[FrontController::class,'shop']);
	Route::get('/contact',[FrontController::class,'contact']);
	Route::post('contact-post',[FrontController::class,'contactpost']);
	Route::get('about',[FrontController::class,'about']);
	Route::get('product-list',[FrontController::class,'productlist']);
	Route::post('product-search',[FrontController::class,'product']);



	Route::post('add-to-cart',[CartController::class,'AddProduct']);
	Route::get('cart',[CartController::class,'cartview']);
	Route::get('cart/{id}',[CartController::class,'cartdelete']);
	Route::post('update-cart',[CartController::class,'updatecart']);
	Route::get('/load-cart-data',[CartController::class,'cartcount']);
	Route::get('cleare/{id}',[CartController::class,'clearecart']);


	
	
	
	Route::get('/check',[OrderController::class,'index']);
	Route::post('order-place',[OrderController::class,'store']);
	Route::get('/order',[OrderController::class,'create']);
	Route::get('/order-view',[OrderController::class,'order']);
	Route::post('add-rezorpay',[OrderController::class,'addrezorpay']);
	Route::get('/thank',[OrderController::class,'thankyou']);

	Route::get('/wishlist',[WishlistController::class,'index']);
	Route::post('/add-to-wishlist',[WishlistController::class,'store']);
	Route::get('/wish-cart',[WishlistController::class,'wishcount']);
	Route::get('wish/{id}',[WishlistController::class,'update']);



   });


      Route::get('/login',[AdminController::class,'index']);
	  Route::post('/admin',[AdminController::class,'login']);


      Route::group(['middleware' => ['admin']],function(){
	  Route::get('/dashboard',[AdminController::class,'dashboard']);
	  Route::get('/logout',function(){
		session()->forget("USER_ID");
		return redirect('login');
      });
	  Route::get('/load-order-data',[AdminController::class,'ordercount']);
	  Route::get('/category-count',[AdminController::class,'categorycount']);
	  Route::get('/product-count',[AdminController::class,'productcount']);
	  Route::get('/sub-count',[AdminController::class,'subcount']);
	  Route::get('/user-count',[AdminController::class,'usercount']);



	 
	                Route::get('/view',[StudentController::class,'index']);
					Route::get('/ragister',[StudentController::class,'create']);
					Route::post('/demo',[StudentController::class,'store']);
					Route::put('/student/{id}',[StudentController::class,'update']);
					Route::get('/edit/{id}',[StudentController::class,'edit']); 
					Route::post('update-data',[StudentController::class,'update_student']); 
					Route::get('profile/{id}',[StudentController::class,'profile']); 

					Route::get('/cat',[CategoryController::class,'index']);
					Route::post('cat',[CategoryController::class,'store']);
					Route::get('category/{id}',[CategoryController::class,'edit']);
					Route::put('update-category', [CategoryController::class,'update_category']);
					Route::get('categor/{id}',[CategoryController::class,'update']);

					Route::get('subCategory',[subCategoryController::class,'index']); 
					Route::post('subCategory',[subCategoryController::class,'store']); 
					Route::get('subCategory/{id}',[subCategoryController::class,'edit']); 
					Route::get('subCategor/{id}',[subCategoryController::class,'update']); 
                    Route::post('subupdate',[subCategoryController::class,'update_category']); 

					Route::get('/pro',[ProductController::class,'index']); 
					Route::post('Product',[ProductController::class,'store']); 
					Route::get('produc/{id}',[ProductController::class,'update']); 
					Route::get('product/{id}',[ProductController::class,'edit']); 
					Route::post('Product_update',[ProductController::class,'product_update']); 
					Route::get('products/{id}', [ProductController::class,'subCat']);

					Route::get('slide', [SlideController::class,'index']);
					Route::post('slide-post', [SlideController::class,'store']);
					Route::get('slider/{id}', [SlideController::class,'update']);
					Route::get('slide/{id}',[SlideController::class,'edit']);
					Route::post('slideupdate',[SlideController::class,'updateslide']);

});

	