@extends('layouts.admin-layout')

@section('title', 'category')

@section('content')

@push('style_1')
<style></style>
@endpush

@section('heading', 'Category')
<div class="card p-5 mt-2">
	<div class="d-flex justify-content-end mb-2">
		<a href="{{ route('admin.category.create') }}" class="btn btn-primary">Create New</a>
	</div>

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
				@foreach($categories as $index => $category)
					<tr>
						<td class="py-1"><strong>{{ $index + 1 }}</strong></td>
						<td class="py-1 fs-5 fw-bold align-middle">{{ $category->name }}</td>
						<td class="py-1">
							<span class="badge light {{ $category->status? 'badge-success': 'badge-danger' }}">
								{{ $category->status? 'Active': 'Inactive' }}
							</span>
						</td>
						<td class="py-1">{{ $category->created_at }}</td>
						<td class="py-1">
							<div class="d-flex gap-2">
								<a href="{{ route('admin.category.show', $category->id) }}" class="btn btn-info light sharp d-flex justify-content-center align-items-center">
									<i class="bi bi-diagram-2-fill fs-3"></i>
								</a>
								<div class="dropdown">
									<button type="button" class="btn btn-danger light sharp" data-bs-toggle="dropdown">
										<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="{{ route('admin.category.edit', $category->id) }}">Edit</a>
										<a class="dropdown-item" href="#">Delete</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		<div class="float-end">
			{{ $categories->links() }}
		</div>
	</div>
</div>
@endsection