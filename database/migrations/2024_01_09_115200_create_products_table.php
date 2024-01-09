<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('subcat_id');
            $table->unsignedBigInteger('brand_id');
            $table->string('product_name')->nullable();
            $table->string('slug')->nullable();
            $table->string('product_code')->nullable();
            $table->integer('quantity')->nullable();
            $table->text('short_desc')->nullable();
            $table->text('long_desc')->nullable();
            $table->string('tags')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->float('selling_price')->nullable();
            $table->float('discount_price')->nullable();
            $table->string('image')->nullable();
            $table->string('hot_deals')->nullable();
            $table->string('special_offer')->nullable();
            $table->string('special_deals')->nullable();
            $table->string('featured')->nullable();
            $table->integer('vendor_id')->nullable();
            $table->enum('status',['active','inactive','pending'])->default('inactive');
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcat_id')->references('id')->on('subcategories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
