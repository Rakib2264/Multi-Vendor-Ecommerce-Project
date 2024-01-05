<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
    public function index(){
        return view("vendor.dashboard");
    }

    public function login(){
        return view("vendor.login");
    }


    public function profile(){
         $profile = User::find(Auth::user()->id);
        return view("vendor.profile",compact("profile"));
    }

    public function profileupdate(Request $request){
        $profile = User::find(Auth::user()->id);

        // Validate the request
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        // Update the profile
        $profile->name = $request->name;
        $profile->username = $request->username;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->update();

        return back()->with('success', 'Profile updated successfully');


   }

   public function passwordchange(){
    return view("vendor.changepassword");
   }

   public function updatepassword(Request $request){
         $request->validate([
             'npas' => 'required',
            'cpas' => 'required|same:npas',
         ]);

        // this way is a best way
          $dbpas= Auth::user()->password;
          $oldpass =  $request->opas;
           if(Hash::check($oldpass,$dbpas)){
            $findvendor = User::find(Auth::user()->id);
            $findvendor->password = Hash::make($request->npas);
            $findvendor->update();
         return back()->with('message', 'Password Change  successfully');

          }else{

            return back()->with('error', 'Password Has Been Not Change');

          }
   }
}
