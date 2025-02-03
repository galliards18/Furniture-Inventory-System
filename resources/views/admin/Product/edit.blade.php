@extends('layouts.admin.index')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Products /</span> Edit Product
        </h4>

        <div class="card">
            <h5 class="card-header">Edit Product</h5>
            <div class="card-body">
                <form action="{{ route('product.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->product_name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('product.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
