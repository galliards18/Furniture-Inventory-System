@extends('layouts.admin.index')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Products /</span> Add Product
        </h4>

        <div class="card">
            <h5 class="card-header">Add New Product</h5>
            <div class="card-body">
                <form action="{{ route('product.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product name" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ route('product.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
