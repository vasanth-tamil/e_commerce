@extends('layouts.user-layout')

@section('title', 'Orders')

@push('style_1')
<style>
    .product-img {
        height: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
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
    .add-to-cart {
        cursor: pointer;
    }
</style>
@endpush

@section('content')
<!-- SLIDER AREA START (slider-6) -->
<div class="ltn__slider-area ltn__slider-3 ltn__slider-6">
    <div class="row">
        <div class="col-md-3">
            <!-- Category Widget -->
            <div class="widget ltn__menu-widget">
                <ul>
                    @foreach($categories as $category)
                        <li class="ps-2 page-item dropend">
                            <label for="category_{{ $category->id }}" class="d-flex justify-content-between align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ $category->name }}

                                <i class="fa fa-angle-double-right pe-0" aria-hidden="true"></i>
                            </label>
                            <ul class="dropdown-menu ms-2">
                                @foreach($category->subCategories as $subCategory)
                                    <li><a href="#" class="dropdown-item py-1" type="button">{{ $subCategory->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="ltn__slide-two-active col-md-9 slick-slide-arrow-1 slick-slide-dots-1 arrow-white--">
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
                                    <li class="add-to-cart">
                                        <a href="#" title="Add to Cart">
                                            <a class="cart-text d-none d-xl-block user-select-none" id="{{ $product->code }}" onclick="addToCart({{ $product->id }}, '{{ $product->code }}')"> 
                                                @if(collect(session()->get('cart'))->pluck('id')->contains($product->id))
                                                    <i class="fa fa-check-circle"></i> Added
                                                @else
                                                    Add to Cart
                                                @endif
                                            </a>
                                            <button class="cart-text w-100 d-block d-xl-none" id="mobile_{{$product->code}}" onclick="addToCart({{ $product->id }}, '{{ $product->code }}')">
                                                
                                                @if(collect(session()->get('cart'))->pluck('id')->contains($product->id))
                                                    <i class="fa fa-check-circle pe-2"></i> Added
                                                @else
                                                    <i class="icon-handbag pe-2"></i>  Add to Cart
                                                @endif
                                            </button>
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
                    <h1 class="section-title section-title-border">Latest products</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__product-slider-item-four-active slick-arrow-1">

            @foreach ($latestProducts as $product)
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
                                    <li class="add-to-cart">
                                        <a href="#" title="Add to Cart">
                                            <a class="cart-text d-none d-xl-block user-select-none" id="{{ $product->code }}" onclick="addToCart({{ $product->id }}, '{{ $product->code }}')"> 
                                                @if(collect(session()->get('cart'))->pluck('id')->contains($product->id))
                                                    <i class="fa fa-check-circle"></i> Added
                                                @else
                                                    Add to Cart
                                                @endif
                                            </a>
                                            <button class="cart-text w-100 d-block d-xl-none" id="mobile_{{$product->code}}" onclick="addToCart({{ $product->id }}, '{{ $product->code }}')">
                                                
                                                @if(collect(session()->get('cart'))->pluck('id')->contains($product->id))
                                                    <i class="fa fa-check-circle pe-2"></i> Added
                                                @else
                                                    <i class="icon-handbag pe-2"></i>  Add to Cart
                                                @endif
                                            </button>
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
@endsection