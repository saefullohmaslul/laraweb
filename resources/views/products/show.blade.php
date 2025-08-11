@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        <i class="bi bi-box"></i> Product Details
                    </h5>
                    <div>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning me-2">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <a href="{{ route('products.index') }}" class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-arrow-left"></i> Back to Products
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-primary mb-3">{{ $product->name }}</h2>
                        
                        @if($product->description)
                            <div class="mb-4">
                                <h6 class="text-muted mb-2">Description</h6>
                                <p class="lead">{{ $product->description }}</p>
                            </div>
                        @endif
                        
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <h6 class="card-title text-muted mb-1">Price</h6>
                                        <h3 class="text-success mb-0">
                                            <i class="bi bi-currency-dollar"></i>${{ number_format($product->price, 2) }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-light">
                                    <div class="card-body text-center">
                                        <h6 class="card-title text-muted mb-1">Stock</h6>
                                        <h3 class="mb-0 {{ $product->stock > 0 ? 'text-info' : 'text-danger' }}">
                                            <i class="bi bi-boxes"></i>{{ $product->stock }}
                                            @if($product->stock == 0)
                                                <small class="text-danger d-block">Out of Stock</small>
                                            @elseif($product->stock <= 5)
                                                <small class="text-warning d-block">Low Stock</small>
                                            @endif
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h6 class="card-title text-muted mb-3">
                                            <i class="bi bi-info-circle"></i> Product Information
                                        </h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-2">
                                                    <strong>Product ID:</strong> 
                                                    <span class="badge bg-secondary">#{{ $product->id }}</span>
                                                </p>
                                                <p class="mb-2">
                                                    <strong>Created:</strong> 
                                                    {{ $product->created_at->format('M d, Y \\a\\t g:i A') }}
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mb-2">
                                                    <strong>Status:</strong> 
                                                    @if($product->stock > 0)
                                                        <span class="badge bg-success">Available</span>
                                                    @else
                                                        <span class="badge bg-danger">Out of Stock</span>
                                                    @endif
                                                </p>
                                                <p class="mb-2">
                                                    <strong>Last Updated:</strong> 
                                                    {{ $product->updated_at->format('M d, Y \\a\\t g:i A') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning me-md-2">
                                <i class="bi bi-pencil"></i> Edit Product
                            </a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline" 
                                  onsubmit="return confirm('Are you sure you want to delete this product? This action cannot be undone.')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash"></i> Delete Product
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Add confirmation for delete action
    document.addEventListener('DOMContentLoaded', function() {
        const deleteForm = document.querySelector('form[method="POST"]');
        if (deleteForm) {
            deleteForm.addEventListener('submit', function(e) {
                if (!confirm('Are you sure you want to delete this product? This action cannot be undone.')) {
                    e.preventDefault();
                }
            });
        }
    });
</script>
@endsection