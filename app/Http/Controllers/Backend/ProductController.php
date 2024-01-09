<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ImageGallery;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index(){
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        $vendors = User::where('role', 'vendor')->get();


        return view("admin.pages.product.add",compact('categories','subcategories','brands','vendors'));
    }

    function store(Request $request){

        $pimage = "";
        if($request->image){
            $image = $request->file("image");
            $customname = rand().".".$image->getClientOriginalExtension();
            $location = public_path("uploads/product/".$customname);
            'Image'::make($image)->resize(1100,1100)->save($location);
            $pimage = $customname;
        }
        $pid = Product::insertGetId([
                'cat_id'=>$request->cat_id,
                'subcat_id'=>$request->subcat_id,
                'brand_id'=>$request->brand_id,
                'product_name'=>$request->product_name,
                'slug'=>Str::slug($request->product_name),
                'product_code'=>$request->product_code,
                'quantity'=>$request->quantity,
                'short_desc'=>$request->short_desc,
                'long_desc'=>$request->long_desc,
                'tags'=>$request->tags,
                'color'=>$request->color,
                'size'=>$request->size,
                'selling_price'=>$request->selling_price,
                'discount_price'=>$request->discount_price,
                'image'=>$pimage,
                'hot_deals'=>$request->hot_deals,
                'special_offer'=>$request->special_offer,
                'special_deals'=>$request->special_deals,
                'featured'=>$request->featured,
                'vendor_id'=>$request->vendor_id,
        ]);
        if ($request->images) {
            $images = $request->file("images");
            foreach($images as $image){
                $customname1 = rand().".".$image->getClientOriginalExtension();
                $location1 = public_path("uploads/product/gallery/".$customname1);
                'Image'::make($image)->resize(1100,1100)->save($location1);
                $gallery =ImageGallery::insert([
                    "product_id" => $pid,
                    "images" => $customname1,
                ]);
            }
        }
        return back()->with('success','Product Saved');

    }


}
