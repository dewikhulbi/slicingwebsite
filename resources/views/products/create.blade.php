@extends('layout')

@section('content')
<h2 class="mb-4">Add New Product</h2>

<form action="{{ route('products.store') }}" method="POST" class="card p-4 shadow-sm bg-white">
    @csrf
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" name="price" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Category</label>
        <select name="category_id" class="form-select" required>
            <option value="">-- Select Category --</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="d-flex justify-content-between">
        <a href="{{ route('products.index') }}" class="btn btn-secondary">← Back</a>
        <button class="btn btn-success">Save</button>
    </div>
</form>
@endsection
