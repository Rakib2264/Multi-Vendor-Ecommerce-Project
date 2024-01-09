<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;
class BrandController extends Controller
{
    public function index(){
        return view("admin.pages.brand.add");
    }

    final public function store(Request $request){
        $brand = new Brand();
        if($request->image){
            $image = $request->file("image");
            $customname = rand().".".$image->getClientOriginalExtension();
            $location = public_path("uploads/brand/".$customname);
            'Image'::make($image)->resize(120,120)->save($location);
            $brand->brand_image = $customname;
        }

        $brand->brand_name = $request->brand_name;
        $brand->brand_slug = Str::slug($request->brand_name);
        $brand->brand_image = $customname;
        $brand->save();
        return back()->with("success","Brand Successfully Added");
    }

    final public function show(){
        $brands = Brand::orderBy("id","desc")->get();
        return view("admin.pages.brand.manage",compact("brands"));
    }
}
