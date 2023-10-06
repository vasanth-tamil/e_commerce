@extends('layouts.user-layout')

@section('title', 'Orders')

@push('style_1')
<style>
    .product-image {
        height: 200px;
        object-fit: contain;
    }
</style>
@endpush

@section('content')

@section('heading', 'Ecommerce.com')

<div style="margin-top: 6rem;">

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

</div>
@endsection

@push("script_1")
<script>
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