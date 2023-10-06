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

@section('heading', 'Ecommerce.com')

<div class="container" style="margin-top: 6rem;">
    <form action="{{ route('user.order.place-order') }}" method="POST">
        @csrf
        <div class="g-3">
            @foreach ($carts as $index => $cart)
                <div class="mx-auto col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="card border-0 shadow-sm p-3">
                        <div class="d-flex">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset($cart->product->image) }}" class="my-2 product-image"/>
                            </div>

                            <div class="d-flex align-items-center ms-3">
                                <div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label class="my-2 fs-4 text-black fw-bold d-block">{{ $cart->product->name }}</label>
                                        <label class="fs-4 d-block my-2 fw-bold text-primary item__price" id="totalPrice__{{$cart->product->code}}">₹ {{ $cart->product->price }}</label>
                                    </div>
                                    <label>{{ $cart->product->description }}</label>
                                
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="fw-bold text-black fs-3">{{ Helper::convertPrice($cart->product->price) }}</div>
                                        
                                        <div class="hstack justify-content-end w-25">
                                            <input hidden value='{{ $cart->product->id }}' name="cart[{{$index}}][id]"/>
                                            <input type="number" name="cart[{{$index}}][qty]" onkeyup="calculatePrice('{{$cart->product->price}}', '{{ $cart->product->code }}', this.value)" onchange="calculatePrice('{{$cart->product->price}}', '{{ $cart->product->code }}', this.value)" min="1" max="100" value="1" class="form-control" />
                                            <button class="btn text-danger light" id="{{ $cart->product->code }}" onclick="addToCart({{ $cart->product->id }}, '{{ $cart->product->code }}')">
                                                    <i class="bi bi-trash2 fs-3"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            @endforeach  
        </div>

        <div class="d-flex justify-content-end col-md-8 col-lg-8 col-sm-12 col-12 mx-auto">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="row my-2">
                    <div class="col text-end fw-bold fs-4 text-black">Sub Total</div>
                    <div class="col text-end fw-bold fs-4 text-black" id="subtotal">₹ 0</div>
                </div>
                <hr/>
                <div class="row my-2">
                    <div class="col text-end fs-4">Discount</div>
                    <div class="col text-end fs-4">₹ 0</div>
                </div>
                <div class="row my-2">
                    <div class="col text-end fs-4">Delivery</div>
                    <div class="col text-end fs-4 text-success">Free</div>
                </div>
                <hr/>
                <div class="row my-2">
                    <div class="col text-end fw-bold fs-3 text-black">Total</div>
                    <div class="col text-end fw-bold fs-3 text-black" id="total">₹ 0</div>
                </div>
                <hr/>
            </div>
        </div>

        <div class="d-flex justify-content-end mt-2 col-md-8 col-lg-8 col-sm-12 col-12 mx-auto">
            <button class="btn btn-primary">Place Order  ( {{ $carts->count() }} )</button>
        </div>
    </form>

    <div class="d-flex justify-content-center py-2">
        {{-- {{ $caproducts->links() }} --}}
    </div>

</div>
@endsection

@push("script_1")
<script>
    function calculateSubTotal() {
        const items = document.querySelectorAll(".item__price");
        var price = 0;
        for(let item of items) {
            price += Number(item.innerText.replace('₹ ', ''));
        }
        document.querySelector('#subtotal').innerText =`₹ ${price}`;
        document.querySelector('#total').innerText =`₹ ${price}`;
    }

    function calculatePrice(price, code, qty) {
        const totalPrice = document.querySelector(`#totalPrice__${ code }`);
        totalPrice.innerText = `₹ ${Number(price) * Number(qty)}`;
        calculateSubTotal();
    }
    calculateSubTotal();

    function addToCart(id, code) {
        data = {product_id: id};

        axios.post("{{ route('user.cart.add-cart') }}", data)
             .then(response => {
                console.log(response);
                
                const currentAddButton = document.querySelector(`#${code}`);
                currentAddButton.disabled = true;
                currentAddButton.innerHTML = `<i class="bi bi-bag-plus-fill fs-3"></i>`;
             })
             .catch(error => console.log(error));
    }
</script>
@endpush