<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Category::paginate(5); //select * from category
        return view('category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                "category_name" => "required | unique:category",
                "category_pic" => "required"
            ]
        );
        //image upload code
        $imgname = "Cat_" . time() . "." . $request->category_pic->extension();
        //Cat4654.jpg
        $request->category_pic->move(public_path("img"), $imgname);
        $imgPath = "/img/" . $imgname;

        //insert code
        $table = new Category();
        $table->category_name = $request->category_name;
        $table->category_pic = $imgPath;
        $table->save();

        return redirect('category')->withSuccess("Insertd sucessfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //open update form
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate(
            [
                "category_name" => "required | unique:category",
            ]
        );

        $table = Category::find($category->_id);
        if (isset($request->category_pic)) {
            //image upload code
            $imgname = "Cat_" . time() . "." . $request->category_pic->extension();
            //Cat4654.jpg
            $request->category_pic->move(public_path("img"), $imgname);
            $imgPath = "/img/" . $imgname;
            $table->category_pic = $imgPath;
        }

        //update code
        $table->category_name = $request->category_name;
        $table->save();

        return redirect('category')->withSuccess("Updated sucessfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect("category")->withSuccess("Deleted Successfully!!!");
    }
}
