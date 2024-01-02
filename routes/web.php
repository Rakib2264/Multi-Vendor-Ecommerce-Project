<?php

use App\Http\Controllers\Admin\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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

});

// for vendor before login
Route::get("vendor/login",[VendorController::class,"login"]);
// for vendor after login
Route::middleware(['auth', 'role:vendor'])->group(function(){
    Route::get("/vendor/dashboard",[VendorController::class,'index'])->name("vendor.dashboard");

});
require __DIR__.'/auth.php';
