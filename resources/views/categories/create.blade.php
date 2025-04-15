<!-- resources/views/categories/create.blade.php -->
@extends('layout')

@section('content')
<h2>Create Category</h2>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" rows="3" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
