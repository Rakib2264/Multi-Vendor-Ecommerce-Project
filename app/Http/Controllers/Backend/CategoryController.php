<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;
class CategoryController extends Controller
{

    public function index(){
        return view("admin.pages.category.add");
    }

    final public function store(Request $request){
        $category = new Category();
        if($request->image){
            $image = $request->file("image");
            $customname = rand().".".$image->getClientOriginalExtension();
            $location = public_path("uploads/category/".$customname);
            'Image'::make($image)->resize(120,120)->save($location);
            $category->cat_image = $customname;
        }

        $category->cat_name = $request->cat_name;
        $category->cat_slug = Str::slug($request->cat_name);
        $category->cat_image = $customname;
        $category->save();
        return back()->with("success","Category Successfully Added");
    }

    final public function show(){
        $categories = Category::orderBy("id","desc")->get();
        return view("admin.pages.category.manage",compact("categories"));
    }
}
