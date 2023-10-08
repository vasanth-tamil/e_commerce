@extends('layouts.user-layout')

@section('title', 'Orders')

@push('style_1')
<style>
    .product-img {
        height: 300px;
        object-fit: cover;
        position: relative;
    }
    .product-img::after {
        content: '';
        position: absolute;
        height: 300px;
        width: 100%;
        top: 0;
        left: 0;
        z-index: -10;
        background-color: #f8f8f8;
    }
</style>
@endpush

@section('content')
<!-- SLIDER AREA START (slider-6) -->
<div class="ltn__slider-area ltn__slider-3 ltn__slider-6">
    <div class="ltn__slide-two-active slick-slide-arrow-1 slick-slide-dots-1 arrow-white--">
        <!-- ltn__slide-item  -->
        <div class="ltn__slide-item ltn__slide-item-8 ltn__slide-item-9--- text-color-white bg-image bg-overlay-theme-black-10---" data-bs-bg="{{ asset('assets/user/img/slider/11.jpg') }}">
            <div class="ltn__slide-item-inner text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h6 class="slide-sub-title white-color slide-title-line-2--- animated">Flower & Gift</h6>
                                            <h1 class="slide-title white-color animated ">Perfect Bunch <br>For Every Occasion</h1>
                                            <div class="slide-brief animated d-none">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="service.html" class="theme-btn-1 btn btn-round">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
</div>
<!-- SLIDER AREA END -->

<!-- PRODUCT AREA START -->
<div class="ltn__product-area ltn__product-gutter  pt-90 pb-40---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title section-title-border">new arrival items</h1>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            @foreach ($products as $product)
                <!-- ltn__product-item -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__product-item text-center">
                        <div class="product-img">
                            <a href="javascript:void(0)"><img src="{{ asset($product->image) }}" alt="#"></a>
                            <div class="product-badge">
                                <ul>
                                    {{-- discounts --}}
                                    {{-- <li class="badge-2">0%</li> --}}
                                </ul>
                            </div>
                            <div class="product-hover-action product-hover-action-2">
                                <div class="product-hover-action product-hover-action-2">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </li>
                                    <li class="add-to-cart">
                                        <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                            <a class="cart-text d-none d-xl-block user-select-none" id="{{ $product->code }}" onclick="addToCart({{ $product->id }}, '{{ $product->code }}')"> 
                                                {{ $cart->pluck('product_id')->contains($product->id) ? 'Already Added': 'Add to Cart' }}
                                            </a>
                                            <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                            <i class="icon-shuffle"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <h2 class="product-title"><a href="javascript:void(0)">{{ $product->name }}</a></h2>
                            <div class="product-price">
                                <span>{{ Helper::convertPrice($product->price) }}</span>
                                <del>$21.00</del>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- PRODUCT SLIDER AREA END -->

<!-- PRODUCT SLIDER AREA START -->
<div class="ltn__product-slider-area ltn__product-gutter  pt-90 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title section-title-border">top products</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__product-slider-item-four-active slick-arrow-1">
            <!-- ltn__product-item -->
            <div class="col-12">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{ asset('assets/user/img/product/1.png') }}" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-2">10%</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">Pink Flower Tree</a></h2>
                        <div class="product-price">
                            <span>$18.00</span>
                            <del>$21.00</del>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-12">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{ asset('assets/user/img/product/2.png') }}" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-1">Hot</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">Premium Joyful</a></h2>
                        <div class="product-price">
                            <span>$18.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-12">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{ asset('assets/user/img/product/3.png') }}" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-2">12%</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">The White Rose</a></h2>
                        <div class="product-price">
                            <span>$16.00</span>
                            <del>$19.00</del>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-12">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{ asset('assets/user/img/product/4.png') }}" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-1">Hot</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">Red Rose Bouquet</a></h2>
                        <div class="product-price">
                            <span>$20.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-12">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="img/product/5.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-1">Hot</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">Heart's Desire</a></h2>
                        <div class="product-price">
                            <span>$15.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT SLIDER AREA END -->

{{-- start: feature --}}
<!-- FEATURE AREA START ( Feature - 3) -->
<div class="ltn__feature-area mb-90 mt-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__feature-item-box-wrap ltn__feature-item-box-wrap-2  ltn__border section-bg-6">
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="{{ asset('assets/user/img/icons/svg/8-trolley.svg') }}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Free shipping</h4>
                            <p>On all orders over $49.00</p>
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="{{ asset('assets/user/img/icons/svg/9-money.svg') }}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>15 days returns</h4>
                            <p>Moneyback guarantee</p>
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="{{ asset('assets/user/img/icons/svg/10-credit-card.svg') }}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Secure checkout</h4>
                            <p>Protected by Paypal</p>
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="{{ asset('assets/user/img/icons/svg/11-gift-card.svg') }}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Offer & gift here</h4>
                            <p>On all orders over</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->
{{-- end: feature --}}
{{-- <div style="margin-top: 6rem;">

    <div class="row g-3">
        @foreach ($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card border-0 shadow-sm p-3">
                    <div>
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset($product->image) }}" class="my-2 product-image"/>
                        </div>
                        <label class="mt-2 fs-4 text-black fw-bold d-block">{{ $product->name }}</label>
                        <label>{{ $product->description }}</label>
                    
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="fw-bold text-black fs-3">{{ Helper::convertPrice($product->price) }}</div>
                            <button class="btn btn-primary light" id="{{ $product->code }}" onclick="addToCart({{ $product->id }}, '{{ $product->code }}')" {{ $cart->contains($product->id)? 'disabled': ''}}>
                                @if($cart->contains($product->id))
                                    <i class="bi bi-bag-check-fill fs-3"></i>
                                @else
                                    <i class="bi bi-bag-plus-fill fs-3"></i>
                                @endif
                            </button>
                        </div>
                    </div>
                </div>
            </div>  
        @endforeach  
    </div>

    <div class="d-flex justify-content-center py-2">
        {{ $products->links() }}
    </div>

</div> --}}
@endsection

@push("script_1")
<script>
    function addToCart(id, code) {
        console.log(id);
        data = {product_id: id};

        axios.post("{{ route('user.cart.add-cart') }}", data)
             .then(response => {
                console.log(response);
                
                const currentAddButton = document.querySelector(`#${code}`);
                currentAddButton.disabled = true;
                currentAddButton.innerHTML = `Already Added`;
             })
             .catch(error => console.log(error));
    }

    function removeToCart(id, code) {
        console.log(id);
        data = {product_id: id};

        axios.post("{{ route('user.cart.remove-cart') }}", data)
             .then(response => {
                console.log(response);
                
                const currentAddButton = document.querySelector(`#${code}`);
                currentAddButton.disabled = true;
                currentAddButton.innerHTML = `Add To Cart`;
             })
             .catch(error => console.log(error));
    }
</script>
@endpush