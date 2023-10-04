@extends('layouts.admin-layout')

@section('title', 'Orders')

@section('content')

@section('heading', 'Orders')
<div class="card">
    <div class="card-body">
        <div class="table-responsive" style="min-height: 500px; ">
            <table class="table table-sm mb-0">
                <thead class="text-white bg-primary">
                    <tr>
                        <th class="align-middle">
                            <div class="form-check custom-checkbox">
                                <input type="checkbox" class="form-check-input" id="checkAll">
                                <label class="form-check-label" for="checkAll"></label>
                            </div>
                        </th>
                        <th class="align-middle">Order</th>
                        <th class="align-middle pe-7">User Details</th>
                        <th class="align-middle" style="min-width: 12.5rem;">Address</th>
                        <th class="align-middle text-end">Vendor Details</th>
                        <th class="align-middle text-end">Total Price</th>
                        <th class="align-middle text-end">Status</th>
                        <th class="no-sort">Action</th>
                    </tr>
                </thead>
                <tbody id="orders">
                    <tr class="btn-reveal-trigger">
                        <td class="py-2">
                            <div class="form-check custom-checkbox checkbox-success">
                                <input type="checkbox" class="form-check-input" id="checkbox">
                                <label class="form-check-label" for="checkbox"></label>
                            </div>
                        </td>
                        <td class="py-2">
                            <a href="#">
                                <span class="order">#181</span></a> by <span class="">Ricky
                                Antony</span><br><a href="mailto:ricky@example.com">ricky@example.com</a></td>
                        <td class="py-2">20/04/2020</td>
                        <td class="py-2">Ricky Antony, 2392 Main Avenue, Penasauka, New Jersey 02149
                            <p class="mb-0 text-500">Via Flat Rate</p>
                        </td>
                        <td class="py-2">Ricky Antony
                            
                        </td>
                        <td class="py-2 text-end font-w600">$99
                        </td>
                        <td class="py-2 text-end"><span class="badge badge-success badge-sm">Completed<span class="ms-1 fa fa-check"></span></span>
                        </td>
                        
                        <td class="py-2 text-end">
                            <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg></span></button>
                                <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="order-dropdown-0">
                                    <div class="py-2"><a class="dropdown-item" href="javascript:void(0);">Completed</a><a class="dropdown-item" href="javascript:void(0);">Processing</a><a class="dropdown-item" href="javascript:void(0);">On Hold</a><a class="dropdown-item" href="javascript:void(0);">Pending</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
 