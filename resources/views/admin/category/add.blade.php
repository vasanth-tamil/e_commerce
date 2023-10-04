@extends('layouts.admin-layout')

@section('title', 'Add category')

@section('content')

@section('heading', 'Add Category')
<div class="card col-md-6 mx-auto mt-4 p-5">
    <div class="card-body">
        <form action="{{ route('admin.category-store') }}" method="POST" class="form-wizard" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 mb-2">
                    <div class="mb-3 p-1">
                        <label class="text-label form-label">Category Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                        <div class="invalid-feedback">
                            @error('name') {{ $message }} @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-2">
                    <div class="mb-3 p-1">
                        <label class="text-label form-label">Category Image</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="Image Path">
                        <div class="invalid-feedback">
                            @error('image') {{ $message }} @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end" >
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection