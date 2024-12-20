@extends('layouts.admin.index')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Furniture /</span> List of Furniture</h4>
        <div class="card">

            <div class="d-flex justify-content-between align-items-center card-header">
                <h5 class="m-0">Furniture</h5>
                <a href="{{ route('furnitures.create') }}" class="btn btn-primary">Add Furniture</a>
            </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Material</th>
                            <th>Quantity</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
									    @forelse($furnitures as $furniture)
									    <tr>
									        <td><strong>{{ $furniture->name }}</strong></td>
									        <td>{{ $furniture->type }}</td>
									        <td>{{ $furniture->material }}</td>
									        <td>{{ $furniture->quantity }}</td>
									        <td>
									            <div class="dropdown">
									                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
									                    <i class="bx bx-dots-vertical-rounded"></i>
									                </button>
									                <div class="dropdown-menu">
									                    <!-- Edit Button -->
									                    <a class="dropdown-item" href="{{ route('furnitures.edit', $furniture->id) }}">
									                        <i class="bx bx-edit-alt me-1"></i> Edit
									                    </a>
									                    <!-- Delete Form -->
									                    <form action="{{ route('furnitures.destroy', $furniture->id) }}" method="POST" style="display:inline;">
									                        @csrf
									                        @method('DELETE')
									                        <button class="dropdown-item" type="submit" onclick="return confirm('Are you sure you want to delete this furniture?')">
									                            <i class="bx bx-trash me-1"></i> Delete
									                        </button>
									                    </form>
									                </div>
									            </div>
									        </td>
									    </tr>
									    @empty
									    <tr>
									        <td colspan="5" class="text-center">No furniture found.</td>
									    </tr>
									    @endforelse
									</tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
