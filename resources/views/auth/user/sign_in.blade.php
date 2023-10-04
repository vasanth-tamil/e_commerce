@extends('layouts.empty-layout')

@section('title', 'sign-in')

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
<div class="container mt-5">
	<div class="mt-5 pt-5">
		<div class="card p-5 col-md-4 mx-auto">
			<div class="d-flex align-items-center flex-column">
				<img src="{{ asset('assets/images/business.png') }}" class="logo">
				<label class="fw-bold fs-4 mt-2 text-uppercase">Sign In</label>
			</div>
			<div class="">
				<label class="form-label">Email</label>
				<input type="text" class="form-control" placeholder="ex: example@gmail.com" />

				<label class="form-label mt-3">Password</label>
				<input type="password" class="form-control" placeholder="ex: example@123"/>

				<div>
					<button class="btn btn-primary btn-block mt-4">Login</button>
				</div>
				<div class="mt-3 text-center">Create new Account <a href="#" class="btn-link">Sign Up</a></div>
			</div>
		</div>
	</div>
</div>
@endsection