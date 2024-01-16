{{-- @isset($featureproducts) --}}
{{-- @foreach ($featureproducts as $featureproduct)
    <div class="modal fade custom-modal" id="quickViewModal{{$featureproduct->id}}" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">

                    @php
                        $images = App\Http\Controllers\Frontend\FrontendController::quickView($featureproduct->id);
                    @endphp

                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                            <div class="detail-gallery">

                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    @foreach ($images as $image)
                                        <figure class="border-radius-10">
                                            <img src="{{ asset('uploads/product/gallery/'.$image->images) }}" alt="product image" />
                                        </figure>
                                    @endforeach
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails">
                                    @foreach ($images as $image)
                                        <div><img src="{{ asset('uploads/product/gallery/'.$image->images) }}" alt="product image" /></div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- End Gallery -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info pr-30 pl-30">
                                <span class="stock-status out-stock"> Sale Off </span>
                                <h3 class="title-detail"><a href="shop-product-right.html" class="text-heading">{{$featureproduct->product_name}}</a></h3>
                                <div class="product-detail-rating">
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <span class="current-price text-brand">${{$featureproduct->selling_price}}</span>
                                        <span>
                                            <span class="save-price font-md color3 ml-15">26% Off</span>
                                            <span class="old-price font-md ml-15">${{$featureproduct->discount_price}}</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="detail-extralink mb-30">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <input type="text" name="quantity" class="qty-val" value="1" min="1">
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <button type="submit" value="{{$featureproduct->id}}" id="cart_button" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                    </div>
                                </div>
                                <div class="font-xs">
                                    <ul>
                                        <li class="mb-5">Vendor: <span class="text-brand">{{$featureproduct->user->name}}</span></li>
                                        <li class="mb-5">MFG:<span class="text-brand"> {{date('Y')}}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endisset --}}


{{-- Gretured Product Product View --}}

@isset($featureproducts)
    @foreach ($featureproducts as $featureproduct)
        <div class="modal fade custom-modal" id="quickViewModal{{$featureproduct->id}}" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
            <!-- ... (rest of your modal code) ... -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">

                        @php
                            $images = App\Http\Controllers\Frontend\FrontendController::quickView($featureproduct->id);
                        @endphp

                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                <div class="detail-gallery">

                                    <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                    <!-- MAIN SLIDES -->
                                    <div class="product-image-slider">
                                        @foreach ($images as $image)
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('uploads/product/gallery/'.$image->images) }}" alt="product image" />
                                            </figure>
                                        @endforeach
                                    </div>
                                    <!-- THUMBNAILS -->
                                    <div class="slider-nav-thumbnails">
                                        @foreach ($images as $image)
                                            <div><img src="{{ asset('uploads/product/gallery/'.$image->images) }}" alt="product image" /></div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- End Gallery -->
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-info pr-30 pl-30">
                                    <span class="stock-status out-stock"> Sale Off </span>
                                    <h3 class="title-detail"><a href="shop-product-right.html" class="text-heading">{{$featureproduct->product_name}}</a></h3>
                                    <div class="product-detail-rating">
                                        <div class="product-rate-cover text-end">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                        </div>
                                    </div>
                                    <div class="clearfix product-price-cover">
                                        <div class="product-price primary-color float-left">
                                            <span class="current-price text-brand">${{$featureproduct->selling_price}}</span>
                                            <span>
                                                <span class="save-price font-md color3 ml-15">26% Off</span>
                                                <span class="old-price font-md ml-15">${{$featureproduct->discount_price}}</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="detail-extralink mb-30">
                                        <div class="detail-qty border radius">
                                            <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                            <input type="text" name="quantity" class="qty-val" value="1" min="1">
                                            <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                        </div>
                                        <div class="product-extra-link2">
                                            <button type="submit" value="{{$featureproduct->id}}" id="cart_button" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="font-xs">
                                        <ul>
                                            <li class="mb-5">Vendor: <span class="text-brand">{{$featureproduct->user->name}}</span></li>
                                            <li class="mb-5">MFG:<span class="text-brand"> {{date('Y')}}</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Detail Info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endisset

{{-- New Products view --}}
@isset($newproducts)
    @foreach ($newproducts as $newproduct)
        <div class="modal fade custom-modal" id="quickViewModalNew{{$newproduct->id}}" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">

                        @php
                            $imagess = App\Http\Controllers\Frontend\FrontendController::quickViewnewproduct($newproduct->id);
                        @endphp

                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                <div class="detail-gallery">

                                    <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                    <!-- MAIN SLIDES -->
                                    <div class="product-image-slider">
                                        @foreach ($imagess as $image)
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('uploads/product/gallery/'.$image->images) }}" alt="product image" />
                                            </figure>
                                        @endforeach
                                    </div>
                                    <!-- THUMBNAILS -->
                                    <div class="slider-nav-thumbnails">
                                        @foreach ($imagess as $image)
                                            <div><img src="{{ asset('uploads/product/gallery/'.$image->images) }}" alt="product image" /></div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- End Gallery -->
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-info pr-30 pl-30">
                                    <span class="stock-status out-stock"> Sale Off </span>
                                    <h3 class="title-detail"><a href="shop-product-right.html" class="text-heading">{{$newproduct->product_name}}</a></h3>
                                    <div class="product-detail-rating">
                                        <div class="product-rate-cover text-end">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                        </div>
                                    </div>
                                    <div class="clearfix product-price-cover">
                                        <div class="product-price primary-color float-left">
                                            <span class="current-price text-brand">${{$newproduct->selling_price}}</span>
                                            <span>
                                                <span class="save-price font-md color3 ml-15">26% Off</span>
                                                <span class="old-price font-md ml-15">${{$newproduct->discount_price}}</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="detail-extralink mb-30">
                                        <div class="detail-qty border radius">
                                            <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                            <input type="text" name="quantity" class="qty-val" value="1" min="1">
                                            <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                        </div>
                                        <div class="product-extra-link2">
                                            <button type="submit" value="{{$newproduct->id}}" id="cart_button" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                    <div class="font-xs">
                                        <ul>
                                            <li class="mb-5">Vendor: <span class="text-brand">{{$newproduct->user->name}}</span></li>
                                            <li class="mb-5">MFG:<span class="text-brand"> {{date('Y')}}</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Detail Info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endisset

