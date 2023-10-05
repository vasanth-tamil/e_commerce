@extends('layouts.admin-layout')

@section('title', 'Product')

@section('content')
    {{-- title section --}}
    @section('heading', 'Product')

<div class="card col-md-6 mx-auto p-5">
    {{-- success message from server --}}
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}   
        </div>
    @endif

    {{-- body content here --}}
    <div class="card-body">
        <form action="{{ route('admin.product.store') }}" method="POST" class="form-wizard" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 mb-1">
                    <div class="mb-2 p-1">
                        <label class="text-label form-label">Product Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}">
                        <div class="invalid-feedback">
                            @error('name') {{ $message }} @enderror
                        </div>
                    </div>
                </div>

                <div class="col-6 mb-1">
                    <div class="mb-2 p-1">
                        <label class="text-label form-label">Category</label>
                        <select  onchange="loadSubcategory(this.value)" class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                            <option value="">-- Select Category --</option>
                            {{-- categories --}}
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            @error('category_id') {{ $message }} @enderror
                        </div>
                    </div>
                </div>

                <div class="col-6 mb-1">
                    <div class="mb-2 p-1">
                        <label class="text-label form-label">Sub Category</label>
                        <select class="form-control @error('subcategory_id') is-invalid @enderror" name="sub_category_id" id="subCategorySelect">
                            <option value="">-- Select SubCategory --</option>
                        </select>
                        <div class="invalid-feedback">
                            @error('subcategory_id') {{ $message }} @enderror
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-1">
                    <div class="mb-2 p-1">
                        <label class="text-label form-label">Product Description</label>
                        <textarea rows="3" class="form-control @error('description') is-invalid @enderror" placeholder="Product Description here.." name="description"></textarea>
                        <div class="invalid-feedback">
                            @error('description') {{ $message }} @enderror
                        </div>
                    </div>
                </div>

                <div class="col-6 mb-1">
                    <div class="mb-2 p-1">
                        <label class="text-label form-label">Price</label>
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="0.00" value="{{ old('price') }}">
                        <div class="invalid-feedback">
                            @error('price') {{ $message }} @enderror
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-1">
                    <div class="mb-2 p-1">
                        <label class="text-label form-label">Stock</label>
                        <input type="text" name="stock" class="form-control @error('stock') is-invalid @enderror" placeholder="0.00" value="{{ old('stock') }}">
                        <div class="invalid-feedback">
                            @error('stock') {{ $message }} @enderror
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-1">
                    <div class="mb-2 p-1">
                        <label class="text-label form-label">Image</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="Image Path" value="{{ old('image') }}">
                        <div class="invalid-feedback">
                            @error('image') {{ $message }} @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end" >
                <a href="{{ url()->previous() }}" class="btn me-1 border-0">Back</a>
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </div>

</div>
@endsection

@push('script_1')
<script defer type="text/javascript">
    const subCategorySelect = document.querySelector('#subCategorySelect');
    
    function loadSubcategory(id) {
        var url = '{{ route("admin.sub-category.show", ":id") }}';
        url = url.replace(':id', id);
        axios.get(url)
            .then(response => {
                // reset all select options values
                subCategorySelect.innerHTML = `<option value=''>-- Select SubCategory --</option>`;

                for(data of response.data) {
                    subCategorySelect.innerHTML += `<option value='${data.id}'>${data.name}</option>`;
                }
            })
            .catch(error => console.log(error));
    }
</script>
@endpush