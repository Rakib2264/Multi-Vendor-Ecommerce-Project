@extends('admin.master')
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Product</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">Add New Product</h5>
            <hr>
            <form action="{{route('store.product')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="form-body mt-4">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="border border-3 p-4 rounded">
                            <div class="mb-3">
                                <label for="inputProductTitle" class="form-label">Product Title</label>
                                <input type="text" name="product_name" class="form-control" id="inputProductTitle"
                                    placeholder="Enter product title">
                            </div>
                            <div class="mb-3">
                                <label for="inputProductDescription" class="form-label">Short Description</label>
                                <textarea class="form-control" name="short_desc" id="inputProductDescription" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="inputProductDescription" class="form-label">Long Description</label>
                                <textarea class="form-control" name="long_desc" id="longdes" rows="3"></textarea>
                            </div>


                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Product Tags</label>
                                    <input type="text" name="" class="form-control visually-hidden" data-role="tagsinput"
                                        value="red,green,blue">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Product Size</label>
                                    <input type="text" name="tags" class="form-control visually-hidden" data-role="tagsinput"
                                        value="red,green,blue">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Product Color</label>
                                    <input type="text" name="color" class="form-control visually-hidden" data-role="tagsinput"
                                        value="red,green,blue">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputProductImages" class="form-label">Product Image</label>
                                <input onchange="previewImg(this)" type="file" name="image" class="form-control" id="inputProductImages" >
                                <img class="mt-2" src="{{asset('uploads/download.png')}}" height="100px" width="100px" id="imagePreview" alt="">
                            </div>
                            <div class="mb-3">
                                <label for="inputProductImages" class="form-label">Product Gallery</label>
                                <input class="form-control" name="images[]" type="file" id="fileInput" multiple onchange="previewImages(this)">
                                <div id="imagePreviews">
                                    <img class="mt-2" src="{{asset('uploads/download.png')}}" height="100px" width="100px" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="border border-3 p-4 rounded">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label for="inputPrice" class="form-label">Discount Price</label>
                                    <input type="text" name="discount_price" class="form-control" id="inputPrice" placeholder="Quantity">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputPrice" class="form-label">Selles Price</label>
                                    <input type="text" name="selling_price" class="form-control" id="inputPrice" placeholder="Quantity">
                                </div>

                                <div class="col-md-12">
                                    <label for="inputCategory" class="form-label">Category</label>
                                    <select name="cat_id" class="form-select" name="category" id="inputCategory">
                                        <option value="">------Select Category------</option>
                                        @foreach ($categories as $category)
                                           <option value="{{$category->id}}">{{$category->cat_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputSubCategory" class="form-label">Sub Category</label>
                                    <select name="subcat_id" class="form-select" name="sub_category" id="inputSubCategory">
                                        <option value="">------Select Sub-Category------</option>
                                        @foreach ($subcategories as $subcategory)
                                        <option value="{{$subcategory->id}}">{{$subcategory->subcat_name}}</option>
                                     @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputBrand" class="form-label">Brand</label>
                                    <select name="brand_id" class="form-select" name="brand" id="inputBrand">
                                        <option value="">------Select Brand------</option>
                                        @foreach ($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                     @endforeach
                                    </select>
                                </div>

                                <!-- Checkbox modifications -->
                                <div class="col-md-12">
                                    <label for="inputPrice" class="form-label">Quantity</label>
                                    <input name="quantity" type="text" class="form-control" id="inputPrice" placeholder="Quantity">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputPrice" class="form-label">Product Code</label>
                                    <input name="product_code" type="text" class="form-control" id="inputPrice" placeholder="Quantity">
                                </div>

                                <div class="col-12">
                                    <label for="inputVendor" class="form-label">Vendor</label>
                                    <select name="vendor_id" class="form-select" id="inputVendor">
                                        <option value="">------Select Vendor------</option>
                                        @foreach ($vendors as $vendor)
                                        <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                                     @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input name="hot_deals" class="form-check-input" type="checkbox" id="hotDealsCheckbox">
                                    <label class="form-check-label" for="hotDealsCheckbox">Hot Deals</label>
                                </div>

                                <div class="col-md-6">
                                    <input name="special_offer" class="form-check-input" type="checkbox" id="specialOfferCheckbox">
                                    <label class="form-check-label" for="specialOfferCheckbox">Special Offer</label>
                                </div>

                                <div class="col-md-6">
                                    <input name="featured" class="form-check-input" type="checkbox" id="featuredCheckbox">
                                    <label class="form-check-label" for="featuredCheckbox">Featured</label>
                                </div>

                                <div class="col-md-6">
                                    <input name="special_deals" class="form-check-input" type="checkbox" id="specialDealsCheckbox">
                                    <label class="form-check-label" for="specialDealsCheckbox">Special Deals</label>
                                </div>

                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Save Product</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!--end row-->
            </div>
        </form>
        </div>
    </div>
@endsection
