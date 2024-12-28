@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Subcategory</h1>
    <form action="{{ route('subcategories.update', ['subcategory' => $subcategory->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" class="form-control" required>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $subcategory->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="name">Subcategory Name</label>
            <input type="text" name="name" class="form-control" value="{{ $subcategory->name }}" required>
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection