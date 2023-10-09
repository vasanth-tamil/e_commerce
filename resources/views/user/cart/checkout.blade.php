@extends('layouts.user-layout')

@section('title', 'Checkout')

@push('style_1')
<style>
</style>
@endpush

@section('content')
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">Checkout</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    {{-- success message --}}
    @if(session()->has('success'))
		<div class="alert alert-success col-md-12 mx-auto text-center mb-3 fw-bold" role="alert">
			{{ session()->get('success') }}
		</div>
	@endif

    {{-- authentication --}}
    @if(!auth()->check())
        <div class="ltn__checkout-single-content ltn__returning-customer-wrap">
            <h5>Returning customer? <a class="ltn__secondary-color" href="#ltn__returning-customer-login" data-bs-toggle="collapse">Click here to Sign Up Or Sign In</a></h5>
            <div id="ltn__returning-customer-login" class="collapse ltn__checkout-single-content-info @if($errors->any()) show @endif">
                <div class="ltn_coupon-code-form ltn__form-box">
                    <p>Please Sign Up.</p>
                    <form action="{{ route('user.sign-up') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control mb-0  @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}">
                                <div class="invalid-feedback">
                                    @error('name') {{ $message }} @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="email" class="form-control mb-0  @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                                <div class="invalid-feedback">
                                    @error('email') {{ $message }} @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <input type="password" name="password" class="form-control mb-0  @error('password') is-invalid @enderror" placeholder="Password">
                                <div class="invalid-feedback">
                                    @error('password') {{ $message }} @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <input type="password" name="password_confirmation" class="form-control mb-0  @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password">
                                <div class="invalid-feedback">
                                    @error('password_confirmation') {{ $message }} @enderror
                                </div>
                            </div>
                        </div>
                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase mt-4">Sign UP</button>
                        <p class="mt-30">I have already Account ? <a href="#">Sign In</a></p>
                    </form>
                </div>
            </div>
        </div>
    @endif

    @if(0 < count(session()->get('cart')))
        <form action="{{ route('user.order.place-order')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__checkout-inner">
                        
                        @if(auth()->check())
                            <div class="ltn__checkout-single-content ltn__coupon-code-wrap">
                                <h5>Have a coupon? <a class="ltn__secondary-color" href="#ltn__coupon-code" data-bs-toggle="collapse">Click here to enter your code</a></h5>
                                <div id="ltn__coupon-code" class="collapse ltn__checkout-single-content-info">
                                    <div class="ltn__coupon-code-form">
                                        <p>If you have a coupon code, please apply it below.</p>
                                        <form action="#">
                                            <input type="text" name="coupon_code" placeholder="Coupon code">
                                            <button class="btn theme-btn-2 btn-effect-2 text-uppercase">Apply Coupon</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="ltn__checkout-single-content mt-50">
                            <h4 class="title-2">Billing Details</h4>
                            <div class="ltn__checkout-single-content-info">
                                <div>
                                    <h6>Personal Information</h6>
                                    <div class="row">
                                        <div class="col-md-6 mt-3">
                                            <div class="input-item">
                                                <input type="text" name="first_name" class="form-control mb-0 @error('first_name') is-invalid @enderror" placeholder="First name" value="{{ auth()->check()? auth()->user()->name : old('first_name') }}">
                                                <div class="invalid-feedback">
                                                    @error('first_name') {{ $message }} @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <div class="input-item">
                                                <input type="text" name="last_name" class="form-control mb-0  @error('last_name') is-invalid @enderror" placeholder="Last name" value="{{ old('last_name') }}">
                                                <div class="invalid-feedback">
                                                    @error('last_name') {{ $message }} @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-4">
                                            <div class="input-item">
                                                <input type="text" name="phone_1" class="form-control mb-0  @error('phone_1') is-invalid @enderror" placeholder="Enter phone" value="{{ old('phone_1') }}">
                                                <div class="invalid-feedback">
                                                    @error('phone_1') {{ $message }} @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-4">
                                            <div class="input-item">
                                                <input type="text" name="phone_2" class="form-control mb-0  @error('phone_2') is-invalid @enderror" placeholder="Enter phone (optinal)" value="{{ old('phone_2') }}">
                                                <div class="invalid-feedback">
                                                    @error('phone_2') {{ $message }} @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-12 col-md-12">
                                            <h6>Address</h6>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-item">
                                                        <input type="text" name="address_1" class="form-control mb-0 @error('address_1') is-invalid @enderror" placeholder="House number and street name" value="{{ old('address_1') }}">
                                                        <div class="invalid-feedback">
                                                            @error('address_1') {{ $message }} @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-item">
                                                        <input type="text" name="address_2" class="form-control mb-0 @error('address_2') is-invalid @enderror" placeholder="Apartment, suite, unit etc. (optional)" value="{{ old('address_2') }}">
                                                        <div class="invalid-feedback">
                                                            @error('address_2') {{ $message }} @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 w-100 mt-4">
                                                    <h6>Country</h6>
                                                    <div class="input-item">
                                                        <select name="country" class="nice-select" style="display: none;">
                                                            <option>Select Country</option>
                                                            <option value="india" selected>India</option>
                                                        </select>
                                                        <div class="nice-select" tabindex="0">
                                                            <span class="current">India</span>
                                                            <ul class="list">
                                                                <li data-value="Select Country" class="option">Select Country</li>
                                                                <li data-value="India" class="option selected">India</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <h6>Town / City</h6>
                                            <div class="input-item">
                                                <input type="text" name="city" class="form-control mb-0 @error('city') is-invalid @enderror" placeholder="City" value="{{ old('city') }}">
                                                <div class="invalid-feedback">
                                                    @error('city') {{ $message }} @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <h6>State </h6>
                                            <div class="input-item">
                                                <input type="text" name="state" class="form-control mb-0 @error('state') is-invalid @enderror" placeholder="State" value="{{ old('state') }}">
                                                <div class="invalid-feedback">
                                                    @error('state') {{ $message }} @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <h6>Zip</h6>
                                            <div class="input-item">
                                                <input type="text" name="zip" class="form-control mb-0 @error('zip') is-invalid @enderror" placeholder="Zip" value="{{ old('zip') }}">
                                                <div class="invalid-feedback">
                                                    @error('zip') {{ $message }} @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="mt-4">Order Notes (optional)</h6>
                                    <div class="input-item input-item-textarea ltn__custom-icon">
                                        <textarea name="ltn__message" name="order_notes" placeholder="Notes about your order, e.g. special notes for delivery.">{{ old('order_notes') }}</textarea>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ltn__checkout-payment-method mt-50">
                        <h4 class="title-2">Payment Method</h4>
                        <div id="checkout_accordion_1">
                            <!-- card -->
                            <div class="card">
                                <label class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-1" aria-expanded="false">
                                    <input type="radio" name="payment_type" value="digital" hidden="true"/>
                                    Check payments
                                </label>
                                <div id="faq-item-2-1" class="collapse" data-bs-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card">
                                <label class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2" aria-expanded="true"> 
                                    <input type="radio" name="payment_type" value="cod" hidden="true" checked/>
                                    Cash on delivery 
                                </label>
                                <div id="faq-item-2-2" class="collapse show" data-bs-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        <p>Pay with cash upon delivery.</p>
                                    </div>
                                </div>
                            </div>                          
                            <!-- card -->
                            <div class="card">
                                <label class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-3" aria-expanded="false">
                                    <input type="radio" name="payment_type" value="paypal" hidden="true"/>
                                    PayPal <img src="{{ asset('assets/user/img/icons/payment-3.png') }}" alt="#">
                                </label>
                                <div id="faq-item-2-3" class="collapse" data-bs-parent="#checkout_accordion_1">
                                    <div class="card-body">
                                        <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ltn__payment-note mt-30 mb-30">
                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                        </div>
                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Place order</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping-cart-total mt-50">
                        <h4 class="title-2">Cart Totals</h4>
                        <table class="table">
                            <tbody>
                                @php($totalPrice = 0)
                                @foreach(session()->get('cart') as $cart)
                                    <tr>
                                        <td class="col-8">{{ $cart['name'] }}</td>
                                        <td class="col-1"><strong>&times; {{ $cart['qty'] }}</strong></td>
                                        <td class="col-3 text-end">{{ Helper::convertPrice($cart['qty'] * $cart['price']) }}</td>
                                    </tr>
                                    @php($totalPrice += $cart['qty'] * $cart['price'])
                                @endforeach
                                <tr>
                                    <td class="col-8 text-danger" colspan='2'>Coupon Code</td>
                                    <td class="col-3 text-end text-danger">- {{ Helper::convertPrice(0) }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="py-4 bg-white"><strong>Order Total</strong></td>
                                    <td class="text-end py-4 bg-white"><strong>{{ Helper::convertPrice($totalPrice) }}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    @else
        <div class="py-5 text-center">
            <img src="{{ asset('assets/images/empty-cart.png') }}" class="img-fluid" style="height: 300px;"/>
            <div class="mt-4 fs-bold">Your Cart is Empty (</div>
        </div>
    @endif
</div>
@endsection