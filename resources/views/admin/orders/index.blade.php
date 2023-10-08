@extends('layouts.admin-layout')

@section('title', 'Orders')

@section('content')

@section('heading', 'Orders List')
<div class="card p-5 mt-2"> 
	<div class="d-flex justify-content-end mb-4">
		<a href="{{ route('admin.product.create') }}" class="btn btn-primary me-2" role="button">Download</a>
	</div> 
	<div class="table-responsive" style="min-height: 500px; ">
		<table class="table table-responsive-md">
			<thead>
				<tr class="text-dark">
					<th class="py-2" style="width:80px;"><strong>#</strong></th>
					<th class="py-2"><strong>Code</strong></th>
					<th class="py-2"><strong>Client Name</strong></th>
					<th class="py-2"><strong>Phone</strong></th>
					<th class="py-2"><strong>Price</strong></th>
					<th class="py-2"><strong>Status</strong></th>
					<th class="py-2"><strong>Orderd Date</strong></th>
					<th class="py-2">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($orders as $index => $order)
					<tr>
						<td class="py-1"><strong>{{ $index + 1 }}</strong></td>
						<td class="py-1">
							<a href="{{ route('admin.product.show', 1) }}">{{ $order->code }}</a>
						</td>
						<td class="py-1">{{ $order->user->name }}</td>
						<td class="py-1 fw-bold text-dark">{{ $order->user->phone }}</td>
						<td class="py-1">{{ Helper::convertPrice($order->total_price) }}</td>
						<td class="py-1">
							<span class="badge light {{ 1? 'badge-success': 'badge-danger' }}">
								{{ $order->status }}
							</span>
						</td>
						<td class="py-1">{{ Helper::formatDateTime($order->created_at) }}</td>
						<td class="py-1">
							<div class="dropdown">
								<button type="button" class="btn btn-danger light sharp" data-bs-toggle="dropdown">
									<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Pending</a>
									<a class="dropdown-item" href="#">Processing</a>
									<a class="dropdown-item" href="#">Cancelled</a>
									<a class="dropdown-item" href="#">Deliverd</a>
								</div>
							</div>
						</td>
					</tr>
				@endforeach			
			</tbody>
		</table>
		<div class="d-flex justify-content-center mt-3">
			{{ $orders->links() }}
		</div>
	</div>
</div>
@endsection