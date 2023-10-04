@extends('layouts.admin-layout')

@section('title', 'Add category')

@section('content')

@section('heading', 'Add Category')
<div class="card col-md-6 mx-auto mt-4 p-5">
    <div class="card-body">
        <div id="smartwizard" class="form-wizard order-create sw sw-theme-default sw-justified">
             <div class="tab-content">
                <div id="wizard_Service" class="tab-pane" role="tabpanel" style="display: block;">
                    <div class="row">
                        <div class="col-lg-6 mb-2">
                            <div class="mb-3">
                                <label class="text-label form-label">Category Name</label>
                                <input type="text" name="firstName" class="form-control" placeholder="Parsley" required="">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <div class="mb-3">
                                <label class="text-label form-label">Category Image</label>
                                <input type="file" name="lastName" class="form-control" placeholder="Montana" required="">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-2">
                            <div class="mb-3">
                                <label class="text-label form-label">Category Description</label>
                                <textarea  class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end" >
                <button class="btn btn-primary" type="button">Save</button>
            </div>
        </div>
    </div>
</div>
@endsection