@extends('layouts.user-layout')

@section('title', 'Successfully Created !')

@push('style_1')
<style></style>
@endpush

@section('content')
<div class="container">
    <div class="col-5 mx-auto py-5 my-5 text-center">
        <i class="fa fa-check-circle display-1 text-success"></i>
        <label class="d-block py-3 fw-bold">Successfully Placed Your Order <span class="text-primary d-block">{{ $order->code }}</span></label>
    
        <div>
            <a href="{{ route('user.product') }}">Back To Home</a>
        </div>
    </div>
</div>
@endsection