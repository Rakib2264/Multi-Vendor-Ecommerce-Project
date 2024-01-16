<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SeoSetting;
use Illuminate\Http\Request;
use Image;

class SeoSettingController extends Controller
{

    public function index(){
        return view("admin.pages.seo.add");
    }

    public function store(Request $request){

        $request->validate([

            'title' => 'required',
            'keyword' => 'required',
            'description' => 'required',
            'feb' => 'required',
            'author' => 'required',
        ]);

        $seo = new SeoSetting();

        if($request->feb){
            $image = $request->file('feb');
            $customName = rand().'.'.$image->getClientOriginalExtension();
            $location = public_path('uploads/febicon/'.$customName);
            'Image'::make($image)->save($location);
            $seo->feb = $customName;

        }
        $seo->title = $request->title;
        $seo->keyword = $request->keyword;
        $seo->description = $request->description;
        $seo->author = $request->author;
        $seo->save();
        return back()->with('success','Seo Setting Added');

    }
}
