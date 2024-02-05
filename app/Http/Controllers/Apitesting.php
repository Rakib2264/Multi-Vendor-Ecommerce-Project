<?php

namespace App\Http\Controllers;

use App\Models\Apitesting as ModelsApitesting;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class Apitesting extends Controller
{
    public function index(){
        return view("apitest");
    }

    public function store(Request $request){
        $apit = new ModelsApitesting();
        $apit->product = $request->product;
        $apit->des = $request->des;
        $apit->save();
        return response()->json([

            'msg'=> "Data Uploaded success",
        ]);
    }

    public function data(Request $request){
        $all = Brand::all();
        if($all){
            return response()->json([
                "status" =>"200",
                 "allData"=>$all,
            ]);
        }else{
            return response()->json([
                "status" =>"404",
             ]);
        }


    }
    function apitest(Request $request){
         if ($request->token === "majid") {
             $cat = Category::where("cat_name", $request->name)->get();

             if (count($cat) > 0) {
                 return response()->json([
                    "status" => "200",
                    "allData" => $cat,
                ]);
            } else {
                 return response()->json([
                    "status" => "404",
                    "msg" => "Data Not Found",   
                ]);
            }
        }
    }

}

/*
  this api documentation
  url = malti_vendor_ecom.test/api/apitest ;
  type:post
   {

    'token':'majid'
   }
  if status 101 invalid token
  and status 200 success > allData{}

*/

