<!DOCTYPE html>
<html class="no-js" lang="en">
@include('include.head')

<body>
    <!-- Modal -->
    <!-- Quick view -->
    @include('include.quickview')
    <!-- Header  -->
    @include('include.header')
    <!-- End Header  -->
    @include('include.mobile_headder')
    <!--End header-->
    <main class="main" style="transform: none;">
        <div class="page-header mt-30 mb-50">
            <div class="container">
                <div class="archive-header">
                    <div class="row align-items-center">
                        <div class="col-xl-3">
                            <h1 class="mb-15">Category</h1>
                            <div class="breadcrumb">
                                <a href="#" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                                <span></span> Shop <span></span> cat_view
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-30" style="transform: none;">
            <div class="row flex-row-reverse" style="transform: none;">
                <div class="col-lg-4-5">
                    <div class="shop-product-fillter">
                        <div class="totall-product">
                         </div>

                    </div>
                    <div class="row product-grid">
                   @foreach ($cat_product_view as $cat_product_view)
                   {{-- @dd($cat_product_view) --}}
                       <!--start product card-->
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="#">
                                            <img class="default-img"
                                                src="{{ asset('uploads/product/'.$cat_product_view->image) }}"
                                                alt="">
                                        </a>
                                    </div>

                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="#">Snack</a>
                                    </div>
                                    <h2><a href="#">{{$cat_product_view->product_name}}</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a
                                                href="#">${{$cat_product_view->user->name}}</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>${{$cat_product_view->discount_price}}</span>
                                            <span class="old-price">${{$cat_product_view->selling_price}}</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="#"><i
                                                    class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        @endforeach
                        <!--end product card-->

                    </div>
                    <!--product grid-->


                    <!--End Deals-->


                </div>
                <div class="col-lg-1-5 primary-sidebar sticky-sidebar"
                    style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                    <!-- Fillter By Price -->

                    <!-- Product sidebar Widget -->


                    <div class="theiaStickySidebar"
                        style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; left: 158.5px; top: 0px;">
                        <div class="sidebar-widget widget-category-2 mb-30">
                            <h5 class="section-title style-1 mb-30">Category</h5>
                            <ul>
                                @foreach ($allcategory as $allcategory)
                                <li>
                                    <a href="{{route('featured_inside_cat',$allcategory->cat_slug)}}"> <img
                                            src="{{ asset('uploads/category/'.$allcategory->cat_image) }}"
                                            alt="">{{$allcategory->cat_name}}</a>
                                            {{-- <span class="count">30</span> --}}
                                </li>
                                @endforeach


                            </ul>
                        </div>
                        <div class="sidebar-widget price_range range mb-30">
                            <h5 class="section-title style-1 mb-30">Fill by price</h5>
                            <div class="price-filter">
                                <div class="price-filter-inner">
                                    <div id="slider-range"
                                        class="mb-20 noUi-target noUi-ltr noUi-horizontal noUi-background">
                                        <div class="noUi-base">
                                            <div class="noUi-origin noUi-connect" style="left: 25%;">
                                                <div class="noUi-handle noUi-handle-lower"></div>
                                            </div>
                                            <div class="noUi-origin noUi-background" style="left: 50%;">
                                                <div class="noUi-handle noUi-handle-upper"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="caption">From: <strong id="slider-range-value1"
                                                class="text-brand">$500</strong></div>
                                        <div class="caption">To: <strong id="slider-range-value2"
                                                class="text-brand">$1,000</strong></div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group">
                                <div class="list-group-item mb-10 mt-10">
                                    <label class="fw-900">Color</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox1" value="">
                                        <label class="form-check-label" for="exampleCheckbox1"><span>Red
                                                (56)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox2" value="">
                                        <label class="form-check-label" for="exampleCheckbox2"><span>Green
                                                (78)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox3" value="">
                                        <label class="form-check-label" for="exampleCheckbox3"><span>Blue
                                                (54)</span></label>
                                    </div>
                                    <label class="fw-900 mt-15">Item Condition</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox11" value="">
                                        <label class="form-check-label" for="exampleCheckbox11"><span>New
                                                (1506)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox21" value="">
                                        <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished
                                                (27)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox31" value="">
                                        <label class="form-check-label" for="exampleCheckbox31"><span>Used
                                                (45)</span></label>
                                    </div>
                                </div>
                            </div>
                            <a href="shop-grid-right.html" class="btn btn-sm btn-default"><i
                                    class="fi-rs-filter mr-5"></i> Fillter</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- End footer  -->
    @include('include.footer')
    <!--End footer-->
    <!-- Preloader Start -->
    @include('include.loading')
    <!-- Vendor JS-->
    @include('include.js')
</body>

</html
