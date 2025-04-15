@extends('layout')

@section('content')
<h2>Edit Product</h2>

<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Price</label>
        <input type="number" name="price" value="{{ $product->price }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Category</label>
        <select name="category_id" class="form-control" required>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>
    </div>
    <button class="btn btn-primary">Update</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
