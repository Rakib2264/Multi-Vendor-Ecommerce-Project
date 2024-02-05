<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ImageGallery;
use App\Models\Product;
use App\Models\SeoSetting;
use Illuminate\Http\Request;



class FrontendController extends Controller
{
    public function index(){
        $firstfourcategory = Category::all()->take(4);
        $secondfourcategory = Category::all()->slice(4, 4); // Use slice to get the next 4 categories
        $thirdtruecategory = Category::all()->slice(8, 2); // Use slice to get the next 2 categories
        $lastcategory = Category::all()->slice(10); // Omit take() to get the remaining categories



          $allcategory = Category::all();
        $featureproducts = Product::where("featured","on")->get();
        $newproducts = Product::all()->take(10);
        return view("dashboard",compact("firstfourcategory","secondfourcategory","thirdtruecategory","lastcategory",'featureproducts','allcategory','newproducts'));
    }

   public static function quickView($id)
    {
         return ImageGallery::where("product_id", $id)->get();
    }
    public static function quickViewnewproduct($id)
    {
         return ImageGallery::where("product_id", $id)->get();
    }


    public function product_details($id){

         $product_details = Product::find($id);

         $firstfourcategory = Category::all()->take(4);
         $secondfourcategory = Category::all()->slice(4, 4); // Use slice to get the next 4 categories
         $thirdtruecategory = Category::all()->slice(8, 2); // Use slice to get the next 2 categories
         $lastcategory = Category::all()->slice(10); // Omit take() to get the remaining categories

        return view('product_details',compact("product_details","firstfourcategory","secondfourcategory","thirdtruecategory","lastcategory"));
    }


    public function cat_product($slug){
        $id = Category::where("cat_slug", $slug)->first()->id;
         $cat_product_view = Product::where('cat_id',$id)->get();
         $allcategory = Category::all();
        return view('cat_product',compact('cat_product_view','allcategory'));
    }


    public function featured_inside_cat($slug){
        $id = Category::where("cat_slug", $slug)->first()->id;
         $cat_product_view = Product::where('cat_id',$id)->get();
         $allcategory = Category::all();
        return view('cat_product',compact('cat_product_view','allcategory'));

    }
}
