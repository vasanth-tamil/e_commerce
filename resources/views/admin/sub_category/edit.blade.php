@extends('layouts.admin-layout')

@section('title', 'Edit Category')

@section('content')

@section('heading', 'Edit Sub-Category')
<div class="card col-md-6 mx-auto mt-4 p-5">
    <div class="card-body">
        <form action="{{ route('admin.sub-category.update', $subCategory->id) }}" method="POST" class="form-wizard" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 mb-2">
                    <div class="col-12 mb-2">
                        <div class="mb-3 p-1">
                            <label class="text-label form-label">Category Name</label>
                            <input type="text" name="name" class="form-control bg-light" placeholder="Name" value="{{ $category->name }}" disabled>
                        </div>
                    </div>
                    <div class="mb-3 p-1">
                        <label class="text-label form-label">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ $subCategory->name }}">
                        <div class="invalid-feedback">
                            @error('name') {{ $message }} @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-2">
                    <div class="mb-3 p-1">
                        <label class="text-label form-label">Image</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="Image Path" value="{{ $subCategory->image }}">
                        <div class="invalid-feedback">
                            @error('image') {{ $message }} @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ url()->previous() }}" class="btn me-1 border-0">Back</a>
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection