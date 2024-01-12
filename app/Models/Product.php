<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function cat(){
        return $this->belongsTo(Category::class,'cat_id');
    }
    public function subcat(){
        return $this->belongsTo(Subcategory::class,'subcat_id');
    }
    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id');
    }

    public function user(){
        return $this->belongsTo(User::class,"vendor_id");
    }
    // Inside the Product model
public function imageGallery()
{
    return $this->hasMany(ImageGallery::class, 'product_id');
}


}
