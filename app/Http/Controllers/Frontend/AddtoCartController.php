<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AddtoCart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddtoCartController extends Controller
{
    public function addtocart($id){


        $product_info = Product::find($id);
        $addtocart = new AddtoCart();
        $addtocart->user_id = Auth::user()->id;
        $addtocart->product_id = $product_info->id;
        $addtocart->product_name = $product_info->product_name;
        $addtocart->qty = 1;
        $addtocart->price = $product_info->selling_price;
        $addtocart->image = $product_info->image;
        $addtocart->save();
        return response()->json([

            "msg"=>"This Product Added In Cart",
        ]);
    }

    public function addtocartshow(){
        $user_id = Auth::user()->id;
        $carts = AddtoCart::where("user_id",$user_id)->get();
        return response()->json([

            "data"=>$carts,
            "msg"=>"This Product Added In Cart",
        ]);
    }

    public function addtocartdelete($id){
        $delete_cart =AddtoCart::find($id);
        $delete_cart->delete();
        return response()->json([
            "msg"=>"Cart Delete",
        ]);
    }

    public function viewcart(){

        $firstfourcategory = Category::all()->take(4);
        $secondfourcategory = Category::all()->slice(4, 4); // Use slice to get the next 4 categories
        $thirdtruecategory = Category::all()->slice(8, 2); // Use slice to get the next 2 categories
        $lastcategory = Category::all()->slice(10); // Omit take() to get the remaining categories



        $user_id = Auth::user()->id;
        $cartItem = AddtoCart::where("user_id",$user_id)->get();
        return view('viewcart',compact('cartItem',"firstfourcategory","secondfourcategory","thirdtruecategory","lastcategory"));
    }
}
