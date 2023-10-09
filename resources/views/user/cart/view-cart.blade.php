@extends('layouts.user-layout')

@section('title', 'Orders')

@push('style_1')
<style>
    .product-image {
        height: 150px;
        object-fit: contain;
    }
</style>
@endpush

@section('content')
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">Cart</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- SHOPING CART AREA START -->
<div class="liton__shoping-cart-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping-cart-inner">
                    <div class="shoping-cart-table table-responsive">
                        <table class="table">
                            <!-- <thead>
                                <th class="cart-product-remove">Remove</th>
                                <th class="cart-product-image">Image</th>
                                <th class="cart-product-info">Product</th>
                                <th class="cart-product-price">Price</th>
                                <th class="cart-product-quantity">Quantity</th>
                                <th class="cart-product-subtotal">Subtotal</th>
                            </thead> -->
                            <tbody>
                                @foreach(session()->get('cart') as $cart)
                                    <tr>
                                        <td class="cart-product-remove">x</td>
                                        <td class="cart-product-image">
                                            <a href="#"><img src="{{ asset($cart['image']) }}" alt="#"></a>
                                        </td>
                                        <td class="cart-product-info w-25">
                                            <h4><a href="#">{{ $cart['name'] }}</a></h4>
                                        </td>
                                        <td class="cart-product-price">{{ Helper::convertPrice($cart['price']) }}</td>
                                        <td class="cart-product-quantity w-25">
                                            <div class="cart-plus-minus">
                                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                            </div>
                                        </td>
                                        <td class="cart-product-subtotal text-center">$298.00</td>
                                    </tr>
                                @endforeach
                                <tr class="cart-coupon-row">
                                    {{-- <td colspan="6">
                                        <div class="cart-coupon">
                                            <input type="text" name="cart-coupon" placeholder="Coupon code">
                                            <button type="submit" class="btn theme-btn-2 btn-effect-2">Apply Coupon</button>
                                        </div>
                                    </td> --}}
                                    <td>
                                        <button type="submit" class="btn theme-btn-2 btn-effect-2-- ">Update Cart</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="shoping-cart-total mt-50">
                        <h4>Cart Totals</h4>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Cart Subtotal</td>
                                    <td>{{ Helper::convertPrice(0) }}</td>
                                </tr>
                                <tr>
                                    <td>Shipping and Handing</td>
                                    <td>{{ Helper::convertPrice(0) }}</td>
                                </tr>
                                <tr>
                                    <td>Vat</td>
                                    <td>{{ Helper::convertPrice(0) }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Order Total</strong></td>
                                    <td><strong>{{ Helper::convertPrice(0) }}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-wrapper text-right">
                            <a href="{{ route('user.cart.checkout-page') }}" class="theme-btn-1 btn btn-effect-1">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOPING CART AREA END -->
@endsection