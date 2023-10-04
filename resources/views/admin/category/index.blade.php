@extends('layouts.admin-layout')

@section('title', 'category')

@section('content')

@section('heading', 'Category')
<div class="card p-5 mt-2">
	<div class="table-responsive">
		<table class="table table-responsive-md">
			<thead>
				<tr>
					<th style="width:80px;"><strong>#</strong></th>
					<th><strong>Image</strong></th>
					<th><strong>Name</strong></th>
					<th><strong>Status</strong></th>
					<th><strong>Created Date</strong></th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $index => $category)
					<tr>
						<td><strong>{{ $index + 1 }}</strong></td>
						<td>{{ $category->image }}</td>
						<td>{{ $category->name }}</td>
						<td>
							<span class="badge light {{ $category->status? 'badge-success': 'badge-danger' }}">
								{{ $category->status? 'Active': 'Inactive' }}
							</span>
						</td>
						<td>
							{{ $category->created_at }}
						</td>
						<td>
							<div class="dropdown">
								<button type="button" class="btn btn-danger light sharp" data-bs-toggle="dropdown">
									<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Edit</a>
									<a class="dropdown-item" href="#">Delete</a>
								</div>
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection