@extends('layout')

@section('content')
<h2>Edit Category</h2>

<form action="{{ route('categories.update', $category) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ $category->name }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control">{{ $category->description }}</textarea>
    </div>
    <button class="btn btn-primary">Update</button>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
