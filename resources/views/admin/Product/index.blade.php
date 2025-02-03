@extends('layouts.admin.index')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Products /</span> List of Products</h4>
        <div class="card">

            <div class="d-flex justify-content-between align-items-center card-header">
                <h5 class="m-0">Products</h5>
                <a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>
            </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse($product as $product)
                        <tr>
                            <td><strong>{{ $product->product_name }}</strong></td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <!-- Edit Button -->
                                        <a class="dropdown-item" href="{{ route('product.edit', $product->id) }}">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>
                                        <!-- Delete Form -->
                                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="dropdown-item" type="submit" onclick="return confirm('Are you sure you want to delete this product?')">
                                                <i class="bx bx-trash me-1"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center">No products found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
