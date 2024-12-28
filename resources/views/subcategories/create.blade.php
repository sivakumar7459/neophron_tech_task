@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Subcategory</h1>
    <form action="{{ route('subcategories.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id" required>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name">Subcategory Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>
@endsection