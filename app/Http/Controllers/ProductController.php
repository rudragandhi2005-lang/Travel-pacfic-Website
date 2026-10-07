<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=product::paginate(5);
        return view('product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cats=Category::get();
        return view('product.create',compact('cats'));  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "package_name" => "required|string",
            "package_desc"=>"required",
            "package_price" => "required|numeric|min:1",
            "package_discount" => "required|numeric|min:0",
            "category" => "required|string",
            "duration" => "required|numeric|min:1",  // Assuming duration is numeric and required
            "route" => "required|string",            // Assuming route should be required and a string
            "detail_desc" => "nullable|string",      // Assuming detail description is optional
            "package_pic" => "nullable|image|mimes:jpeg,png,jpg,gif|max:2048"  // Assuming package_pic is an image file and optional
        ]);
        
        //image upload code
        $imgname = "Pro_" . time() . "." . $request->package_pic->extension();
        //Pro_4654.jpg
        $request->package_pic->move(public_path("img"), $imgname);
        $imgPath = "/img/" . $imgname;

        $table = new Product();
      
        $table->package_name = $request->package_name;
        $table->package_desc  = $request->package_desc;
        $table->package_price  = $request->package_price;
        $table->package_discount  = $request->package_discount;
        $table->category = $request->category;
        $table->duration =$request->duration;
        $table->route =$request->route;
        $table->detail_desc =$request->detail_desc;
        $table->package_pic =$imgPath;
        $table->save();

        return redirect("product")->withSuccess("Inserted Succefully");

       
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        $cats=Category::get();
        return view('product.edit',compact('product','cats'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //

        $request->validate([
            "package_name" => "required|string",
            "package_desc"=>"required",
            "package_price" => "required|numeric|min:1",
            "package_discount" => "required|numeric|min:0",
            "category" => "required|string",
            "duration" => "required",  // Assuming duration is numeric and required
            "route" => "required|string",            // Assuming route should be required and a string
            "detail_desc" => "nullable|string",      // Assuming detail description is optional
        ]);
        
        $table = Product::find($product->_id);

        //image upload code
        if(isset($request->package_pic)){

        $imgname = "Pro_" . time() . "." . $request->package_pic->extension();
        //Pro_4654.jpg
        $request->package_pic->move(public_path("img"), $imgname);
        $imgPath = "/img/" . $imgname;
        $table->package_pic =$imgPath;

        }
      
        $table->package_name = $request->package_name;
        $table->package_desc  = $request->package_desc;
        $table->package_price  = $request->package_price;
        $table->package_discount  = $request->package_discount;
        $table->category = $request->category;
        $table->duration =$request->duration;
        $table->route =$request->route;
        $table->detail_desc =$request->detail_desc;
        $table->save();

        return redirect("product")->withSuccess("updated Succefully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect('product')->withSuccess("deleted sucessfully");

    }
}
