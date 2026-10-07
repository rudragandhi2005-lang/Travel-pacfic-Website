<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\User1;
use Illuminate\Http\Request;

class User1Controller extends Controller
{
    public function admin()  {
        $c_count=Category::count();
        $p_count=Product::count();
        $o_count=Cart::where('status',1)->count();
        $u_count=User1::count();
        // $u_count=User1::count();
        $r=Cart::where('status',1)->sum('total');
        $data=cart::where('status',1)->latest()->get();
        return view('adminhome',compact('c_count','p_count','o_count','u_count','r','data'));
    
    }
    //
    public function index()
    {
        return view('regster');
    }
    public function index1()
    {                       
        return view('login');
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                "fullname" => "required",
                "username" => "required | unique:user",
                "password" => "required | min:6",
                "con_password" => "required | same:password",
                "email" => "required | email | unique:user",
                "mobileno" => "required | numeric | digits:10",
                "address" => "required"

            ]
        );
        $table = new User1();
        $table->fullname = $request->fullname;
        $table->username = $request->username;
        $table->password = $request->password;
        $table->email = $request->email;
        $table->mobileno = $request->mobileno;
        $table->address = $request->address;
        $table->save();
        return redirect('login')->withSuccess("Registered successfully");
    }


    public function login(Request $request)
    {
        if (strcmp($request->username, "admin@gmail.com") == 0 && strcmp($request->password, "admin") == 0) {
            return redirect("/admin");
        } else {
            $data = User1::where("username", $request->username)
                ->where("password", $request->password)
                ->first();
            if ($data == null) {
                return redirect("login")->withSuccess("Invalid Username/password");
            } else {
                session()->put("user",$data);
                return redirect("/");
            }
        }
    }


    public function home()
    {
        $cats = Category::get();
        $prods = Product::get();
        return view('home', compact('cats','prods'));
    }
   
    public function getAllUser(){
        $data=User1::get();
        return view('adminuser',compact('data'));
    }
    
    public function detail($id){
        $product=Product::where("_id",$id)->first();
        return view('productdetail',compact('product'));
    }
    public function search(Request $request){
        $cats=Category::get();
        $prods=Product::get();
        $prods=Product::where('package_name','LIKE','%'.$request->search.'%')->get();

        return view('shop',compact('prods'));
    }
    public function  shop()  {
        $cats=Category::get();
        $prods=Product::get();

        return view('shop',compact('cats','prods'));
        
    }
}

