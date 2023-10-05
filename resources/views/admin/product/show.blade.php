@extends('layouts.admin-layout')

@section('title', 'category')

@section('content')

@push('style_1')
<style>
    .product-image {
        height: 300px;
        width: 100%;
		object-fit: contain;
        border: 1px solid #3333;
        border-radius: 5px;
    }
    .description {
        min-height: 50px;
    }
    .category-image {
        height: 80px;
        object-fit: contain;
    }
</style>
@endpush

@section('heading', 'Product Detail')
<div class="card p-5 mt-2">
    <div>
        <div class="d-flex">
            <img src="{{ asset($product->image) }}" class="product-image"/>

            <div class="d-flex flex-column justify-content-between w-25 ms-2">
                <div class="col-12">
                    <div class="p-3 text-center">
                        <div class="fs-3 fw-bold text-dark">{{ Helper::convertPrice($product->price) }}</div>
                        <div>Price</div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="p-3 text-center">
                        <div class="fs-3 fw-bold text-dark">{{ $product->stocks }}</div>
                        <div>Stocks</div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="p-3 text-center">
                        <div class="fs-3 fw-bold text-dark">{{ Helper::formatDate($product->price) }}</div>
                        <div>Created At</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-3">
            <div class="fs-3 fw-bold text-dark">{{ $product->name }}</div>
            <div class="lead description mt-1">{{ $product->description }}</div>

            <div class="row">
                <div class="col-2 p-2">
                    <div class="card p-3">
                        <div class="my-2 text-center fw-bold">{{ $product->category->name }}</div>
                    </div>
                </div>

                <div class="col-2 p-2">
                    <div class="card p-3">
                        <div class="my-2 text-center fw-bold">{{ $product->subCategory->name }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection