@extends('layouts.app')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@section('content')
<div class="container">
    <h2>Edit Product</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>

        <div class="form-group">
            <label for="code">Product Code</label>
            <input type="text" class="form-control" id="code" name="code" value="{{ $product->code }}" required>
        </div>

        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id" required>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="subcategory_id">Sub Category</label>
            <select class="form-control" id="subcategory_id" name="subcategory_id" required>
                @foreach($subCategories as $subCategory)
                <option value="{{ $subCategory->id }}" {{ $product->subcategory_id == $subCategory->id ? 'selected' : '' }}>
                    {{ $subCategory->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" value="{{ $product->brand }}" required>
        </div>

        <div class="form-group">
            <label for="mrp">MRP</label>
            <input type="number" class="form-control" id="mrp" name="mrp" value="{{ $product->mrp }}" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Update Product</button>
        </div>
    </form>
</div>
@endsection