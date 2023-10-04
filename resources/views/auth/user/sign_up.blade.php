@extends('layouts.empty-layout')

@section('title', 'sign-up')

@push('style_1') 
<style>
	.logo {
		height: 150px;
		width: 150px;
		object-fit: contain;
	}
</style>
@endpush
@section('content')
<div class="container">
	<div class="my-4">
		<div class="card p-5 py-4 col-md-4 mx-auto">
			<div class="d-flex align-items-center flex-column">
				<img src="{{ asset('assets/images/business.png') }}" class="logo">
				<label class="fw-bold fs-4 mt-2 text-uppercase">Sign Up</label>
			</div>
			<div class="">
				<label class="form-label">Email</label>
				<input type="text" class="form-control" placeholder="ex: example@gmail.com"/>

				<label class="form-label mt-2">Phone No</label>
				<input type="text" class="form-control" placeholder="ex: 9182930495"/>

				<label class="form-label mt-2">Password</label>
				<input type="password" class="form-control" placeholder="ex: eXample@123"/>

				<label class="form-label mt-2">Confirm Password</label>
				<input type="password" class="form-control" placeholder="ex: eXample@123"/>

				<div>
					<button class="btn btn-primary btn-block mt-4">Sign Up</button>
				</div>
				<div class="mt-3 text-center">I have already Account <a href="#" class="btn-link">Sign In</a></div>
			</div>
		</div>
	</div>
</div>
@endsection