<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;
class SubCategoryController extends Controller
{

    public function index(){
        $categories = Category::orderBy("id","desc")->get();
        return view("admin.pages.subcategory.add",compact('categories'));
    }

    final public function store(Request $request){
        $subcategory = new Subcategory();
        $subcategory->subcat_name = $request->subcat_name;
        $subcategory->cat_id = $request->cat_id;
        $subcategory->subcat_slug = Str::slug($request->subcat_name);
        $subcategory->save();
        return back()->with("success","Sub-Category Successfully Added");
    }

      public function show(){
        $subcategories = Subcategory::orderBy("id","desc")->get();
        return view('admin.pages.subcategory.manage',compact('subcategories'));
    }
}
