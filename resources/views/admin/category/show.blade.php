@extends('layouts.admin-layout')

@section('title', 'category')

@section('content')

@push('style_1')
<style>
	.category-image {
		width: 100px;
		height: 100px;
		object-fit: cover;
		border-radius: 8px;
	}
</style>
@endpush

@section('heading', 'Category')
<div class="card p-5 mt-2">
	<div class="d-flex">
		<img src="{{ asset($category->image) }}" class="category-image border border-2 p-1 border-success" alt="">

		<div class="mx-3 d-flex justify-content-between w-100">
			<div>
				<label class="fw-bold text-dark fs-3">{{ $category->name }}</label>
				<label class="d-block">{{ $category->created_at }}</label>
				<span class="badge light {{ $category->status? 'badge-success': 'badge-danger' }}">
					{{ $category->status? 'Active': 'Inactive' }}
				</span>
			</div>
			<div>
				<a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-warning light btn-sm">
					<i class="bi bi-pen fs-5 align-middle"></i>
				</a>

				<a href="{{ route('admin.sub-category.create', $category->id) }}" class="btn btn-primary light btn-sm">
					<i class="bi bi-diagram-2-fill fs-5 align-middle"></i>
				</a>
			</div>
		</div>
	</div>

	<div class="mt-5 mb-3 fs-5 fw-bold text-dark">Sub Categories</div>
	<div class="table-responsive">
		<table class="table table-responsive-md">
			<thead>
				<tr>
					<th style="width:80px;" class="py-2"><strong>#</strong></th>
					<th class="py-2"><strong>Name</strong></th>
					<th class="py-2"><strong>Status</strong></th>
					<th class="py-2"><strong>Date</strong></th>
					<th class="py-2">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($subCategories as $index => $subCategory)
					<tr>
						<td class="py-1"><strong>{{ $index + 1 }}</strong></td>
						<td class="py-1 fs-5 fw-bold align-middle">{{ $subCategory->name }}</td>
						<td class="py-1">
							<span class="badge light {{ $subCategory->status? 'badge-success': 'badge-danger' }}">
								{{ $subCategory->status? 'Active': 'Inactive' }}
							</span>
						</td>
						<td class="py-1">{{ $subCategory->created_at }}</td>
						<td class="py-1">
							<div class="dropdown">
								<button type="button" class="btn btn-danger light sharp" data-bs-toggle="dropdown">
									<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="{{ route('admin.sub-category.edit', $subCategory->id) }}">Edit</a>
									<a class="dropdown-item" href="#">Delete</a>
								</div>
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		<div class="float-end">
			{{ $subCategories->links() }}
		</div>
	</div>
</div>
@endsection