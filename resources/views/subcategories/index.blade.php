@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Product Subcategory</h1>
    <a href="{{ route('subcategories.create') }}" class="btn btn-primary">Add new Subcategory</a>

    </br>
    </br>

    <!-- Display Subcategories -->
    <table class="table">
        <thead>
            <tr>
                <th>S.no</th>
                <th>Category Id</th>
                <th>Sub Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subcategories as $subcategory)
            <tr>
                <!-- <td>{{ $subcategory->id }}</td> -->
                <td>{{ $loop->iteration }}</td>
                <td>{{ $subcategory->category_id }}</td>
                <td>{{ $subcategory->name }}</td>
                <td>
                    <a href="{{ route('subcategories.edit', $subcategory->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('subcategories.destroy', $subcategory->id) }}" method="POST" style="display:inline-block;">
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