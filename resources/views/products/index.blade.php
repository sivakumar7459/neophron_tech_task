@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Products Master</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add New Product</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>S.no</th>
                <th>Category Id</th>
                <th>Subcategory Id</th>
                <th>Name</th>
                <th>Code</th>
                <th>Brand</th>
                <th>MRP</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->category_id }}</td>
                <td>{{ $product->subcategory_id}}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->code }}</td>
                <td>{{ $product->brand }}</td>
                <td>{{ $product->mrp }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection