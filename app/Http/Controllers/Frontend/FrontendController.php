<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ImageGallery;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $firstfourcategory = Category::all()->take(4);
        $secondfourcategory = Category::all()->slice(4, 4); // Use slice to get the next 4 categories
        $thirdtruecategory = Category::all()->slice(8, 2); // Use slice to get the next 2 categories
        $lastcategory = Category::all()->slice(10); // Omit take() to get the remaining categories


        $featuredCategories = Category::all();
        $featureproducts = Product::where("featured","on")->get();
        return view("dashboard",compact("firstfourcategory","secondfourcategory","thirdtruecategory","lastcategory",'featureproducts',"featuredCategories"));
    }

   public static function quickView($id)
    {
        return ImageGallery::where("product_id", $id)->get();
    }
}
