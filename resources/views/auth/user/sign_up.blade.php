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
			<form action="{{ route('user.sign-up') }}" method="POST">
				@csrf
				<label class="form-label">Name</label>
				<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="ex: tamil" value="{{ old('name') }}"/>
				<div class="invalid-feedback">
					@error('name') {{ $message }} @enderror
				</div>

				<label class="form-label">Email</label>
				<input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="ex: example@gmail.com" value="{{ old('email') }}"/>
				<div class="invalid-feedback">
					@error('email') {{ $message }} @enderror
				</div>

				<label class="form-label mt-2">Phone No</label>
				<input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="ex: 9182930495" value="{{ old('phone') }}"/>
				<div class="invalid-feedback">
					@error('phone') {{ $message }} @enderror
				</div>

				<label class="form-label mt-2">Password</label>
				<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="ex: eXample@123" value="{{ old('password') }}"/>
				<div class="invalid-feedback">
					@error('password') {{ $message }} @enderror
				</div>

				<label class="form-label mt-2">Confirm Password</label>
				<input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="ex: eXample@123" value="{{ old('password_confirmation') }}"/>
				<div class="invalid-feedback">
					@error('password_confirmation') {{ $message }} @enderror
				</div>

				<div>
					<button class="btn btn-primary btn-block mt-4">Sign Up</button>
				</div>
				<div class="mt-3 text-center">I have already Account <a href="{{ route('user.sign_in') }}" class="btn-link">Sign In</a></div>
			</form>
		</div>
	</div>
</div>
@endsection