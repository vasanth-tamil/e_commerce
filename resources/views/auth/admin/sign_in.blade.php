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
	@if(session()->has('success'))
		<div class="alert alert-success col-md-4 mx-auto text-center mb-0 fw-bold" role="alert">
			{{ session()->get('success') }}
		</div>
	@endif
	@if(session()->has('error'))
		<div class="alert alert-danger col-md-4 mx-auto text-center mb-0 fw-bold" role="alert">
			{{ session()->get('error') }}
		</div>
	@endif

	<div class="pt-5">
		<div class="card p-5 col-md-4 mx-auto">
			<div class="d-flex align-items-center flex-column">
				<img src="{{ asset('assets/images/business.png') }}" class="logo">
				<label class="fw-bold fs-4 mt-2 text-uppercase">Sign In</label>
			</div>
			<form action="{{ route('admin.sign-in') }}" method="POST">
				@csrf
				<label class="form-label">Email</label>
				<input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="ex: example@gmail.com" name="email" value="{{ old('email') }}"/>
				<div class="invalid-feedback">
					@error('email') {{ $message }} @enderror
				</div>

				<label class="form-label mt-3">Password</label>
				<input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="ex: example@123" name="password" value="{{ old('password') }}"/>
				<div class="invalid-feedback">
					@error('password') {{ $message }} @enderror
				</div>

				<div>
					<button class="btn btn-primary btn-block mt-4">Login</button>
				</div>
				<div class="mt-3 text-center">Create new Account <a href="{{ route('user.sign_up') }}" class="btn-link">Sign Up</a></div>
			</div>
		</div>
	</div>
</div>
@endsection