@extends('layout')

@section('content')
<h2>Products</h2>
<a href="{{ route('products.create') }}" class="btn btn-primary mb-2">Add Product</a>

<table class="table">
    <thead>
        <tr>
            <th>Name</th><th>Price</th><th>Category</th><th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>Rp{{ number_format($product->price, 0, ',', '.') }}</td>
            <td>{{ $product->category->name ?? '-' }}</td>
            <td>
                <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
