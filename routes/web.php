<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SeoSettingController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Frontend\AddtoCartController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Vendor\VendorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// userinteface
Route::get("/",[FrontendController::class,"index"])->name('index');
Route::get("/product_details/{id}",[FrontendController::class,"product_details"])->name('product_details');

Route::get('/dashboard', function () {
    return view('userdashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function(){
    Route::get('/addtocart/{id}',[AddtoCartController::class,'addtocart']);
    Route::get('/addtocartdelete/{id}',[AddtoCartController::class,'addtocartdelete']);
    Route::get('/addtocartshow',[AddtoCartController::class,'addtocartshow']);
    Route::get('/viewcart',[AddtoCartController::class,'viewcart'])->name('viewcart');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// for admin before login
Route::get("admin/login",[AdminController::class,"login"]);
// for admin after login
Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get("/admin/dashboard",[AdminController::class,'index'])->name("admin.dashboard");
    Route::get("/admin/profile",[AdminController::class,'profile'])->name("admin.profile");
    Route::post("/admin/profileupdate",[AdminController::class,'profileupdate'])->name("admin.profileupdate");
    Route::get("/admin/passwordchange",[AdminController::class,'passwordchange'])->name("admin.passwordchange");
    Route::post("/admin/updatepassword",[AdminController::class,'updatepassword'])->name("admin.updatepassword");
});

// for vendor before login
Route::get("vendor/login",[VendorController::class,"login"]);
// for vendor after login
Route::middleware(['auth', 'role:vendor'])->group(function(){
    Route::get("/vendor/dashboard",[VendorController::class,'index'])->name("vendor.dashboard");
    Route::get("/vendor/profile",[VendorController::class,'profile'])->name("vendor.profile");
    Route::post("/vendor/profileupdate",[VendorController::class,'profileupdate'])->name("vendor.profileupdate");
    Route::get("/vendor/passwordchange",[VendorController::class,'passwordchange'])->name("vendor.passwordchange");
    Route::post("/vendor/updatepassword",[VendorController::class,'updatepassword'])->name("vendor.updatepassword");
});

// for backend operation
Route::middleware(['auth','role:admin'])->group(function(){
    Route::group(['prefix'=>'/category'],function(){

        Route::get('/add',[CategoryController::class,'index'])->name('add.category');
        Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('edit.category');
        Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('delete.category');
        Route::post('/update/{id}',[CategoryController::class,'update'])->name('update.category');
        Route::post('/store',[CategoryController::class,'store'])->name('store.category');
        Route::get('/show',[CategoryController::class,'show'])->name('show.category');

    });

    Route::group(['prefix'=>'/subcategory'],function(){

        Route::get('/add',[SubCategoryController::class,'index'])->name('add.subcategory');
        Route::post('/store',[SubCategoryController::class,'store'])->name('store.subcategory');
        Route::get('/show',[SubCategoryController::class,'show'])->name('show.subcategory');

    });

    Route::group(['prefix'=>'/brand'],function(){

        Route::get('/add',[BrandController::class,'index'])->name('add.brand');
        Route::post('/store',[BrandController::class,'store'])->name('store.brand');
        Route::get('/show',[BrandController::class,'show'])->name('show.brand');

    });

    Route::group(['prefix'=>'/product'],function(){

        Route::get('/add',[ProductController::class,'index'])->name('add.product');
        Route::post('/store',[ProductController::class,'store'])->name('store.product');
        Route::get('/show',[ProductController::class,'show'])->name('show.product');

    });


    Route::group(['prefix'=>'/seo'],function(){

        Route::get('/add',[SeoSettingController::class,'index'])->name('add.seo');
        Route::post('/store',[SeoSettingController::class,'store'])->name('store.seo');
        Route::get('/show',[SeoSettingController::class,'show'])->name('show.seo');

    });
});






require __DIR__.'/auth.php';
