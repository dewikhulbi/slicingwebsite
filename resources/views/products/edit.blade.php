@extends('layout')

@section('content')
<h2 class="mb-4">Edit Product</h2>

<form action="{{ route('products.update', $product) }}" method="POST" class="card p-4 shadow-sm bg-white">
    @csrf @method('PUT')
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" name="price" value="{{ $product->price }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Category</label>
        <select name="category_id" class="form-select" required>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="d-flex justify-content-between">
        <a href="{{ route('products.index') }}" class="btn btn-secondary">← Back</a>
        <button class="btn btn-primary">Update</button>
    </div>
</form>
@endsection
