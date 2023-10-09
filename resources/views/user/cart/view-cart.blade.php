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
                @if(session()->has('success'))
                    <div class="alert alert-success col my-2 py-2 text-center mb-0 fw-bold" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif

                <div class="shoping-cart-inner">
                    <div class="shoping-cart-table table-responsive">
                        <form action="{{route('user.cart.update-cart')}}" method="POST">
                            @csrf
                            <table class="table">
                                <tbody>
                                    @php($carts = session()->get('cart') ?? [])
                                    @foreach($carts as $index => $cart)
                                        <tr>
                                            <td class="cart-product-remove">{{ ++ $index }}</td>
                                            <td class="cart-product-image">
                                                <a href="#"><img src="{{ asset($cart['image']) }}" alt="#"></a>
                                            </td>
                                            <td class="cart-product-info w-25">
                                                <input type="text" hidden value={{$cart['id']}} name="updateCart[{{$index}}][product_id]"/>
                                                <h4><a href="#">{{ $cart['name'] }}</a></h4>
                                            </td>
                                            <td class="cart-product-price">{{ Helper::convertPrice($cart['price']) }}</td>
                                            <td class="cart-product-quantity w-25">
                                                <div class="cart-plus-minus" onclick="calculatePrice('{{ $cart['code'] }}', {{ $cart['price'] }})">
                                                    <input type="text" name="updateCart[{{$index}}][qty]" value="{{ $cart['qty'] }}" onkeyup="calculatePrice('{{ $cart['code'] }}', {{ $cart['price'] }})" id="qty{{$cart['code']}}" class="cart-plus-minus-box">
                                                </div>
                                            </td>
                                            <td class="cart-product-subtotal text-center" id="totalLabel{{ $cart['code'] }}">{{ Helper::convertPrice($cart['qty'] * $cart['price']) }}</td>
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
                        </form>
                    </div>
                    <div class="shoping-cart-total mt-50">
                        <h4>Cart Totals</h4>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Cart Subtotal</td>
                                    <td id="subTotal">{{ Helper::convertPrice(0) }}</td>
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
                                    <td><strong id="total">{{ Helper::convertPrice(0) }}</strong></td>
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

@push('script_1')
<script>
    const itemSubTotal = document.querySelectorAll('.cart-product-subtotal');

    function calculateSubTotal() {
        var totalPrice = 0;
        for(let item of itemSubTotal) {
            price = item.innerText.replace('₹ ', '').replace(',', '');
            totalPrice += Number(price);

        }

        document.querySelector(`#subTotal`).innerText = `₹ ${Number(totalPrice)}`;
        document.querySelector(`#total`).innerText = `₹ ${Number(totalPrice)}`;
    }
    calculateSubTotal()

    function calculatePrice(code, price) {
        const totalLabel = document.querySelector(`#totalLabel${code}`);
        const qtyInput = document.querySelector(`#qty${code}`);
        totalLabel.innerText = `₹ ${Number(qtyInput.value) * price}`;

        calculateSubTotal()
    }
</script>
@endpush