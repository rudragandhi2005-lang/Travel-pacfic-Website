<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\User1Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route::get('/', [User1Controller::class,'home']);
Route::get("/",[User1Controller::class,'home']);

Route::get('/admin', [User1Controller::class,'admin']);

Route::resource('category',CategoryController::class);
Route::resource("/category",CategoryController::class);
Route::get("/register",[User1Controller::class,'index']);
Route::get("/login",[User1Controller::class,'index1']);

Route::post("/register_user",[User1Controller::class,'register']);


Route::post("/login_user",[User1Controller::class,'login']);
Route::post("/contact_user",[User1Controller::class,'contact']);
//Route::("/about",[User1Controller::class,'about']);
Route::get('/users',[User1Controller::class,'getAllUser']);

Route::resource('product', ProductController::class);

Route::get('/detail/{_id}',[User1Controller::class,'detail']);


Route::get('/cart',[CartController::class,'getCartItem']);
Route::get('/minus/{id}',[CartController::class,'minus']);
Route::get('/plus/{id}',[CartController::class,'plus']);
Route::get('/confirm',[CartController::class,'confirm']);
Route::get('/remove/{id}',[CartController::class,'removeCart']);
Route::get('/addcart/{id}',[CartController::class,'addtocart']);
Route::get('/orders',[CartController::class,'orders']);

Route::get('/contact', function () {
  return view('contact');
});

Route::get('/about', function () {
  return view('about');
});

Route::get('/home',function (){
  return view('home');
});

Route::post('/search',[User1Controller::class,'search']);
route::get('/shop',[User1Controller::class,'shop']);