@extends('app')

@section('content')
    <div class="container">
        <h1>Products</h1>

        <a href="{{ route('admin.products.create') }}" class="btn btn-default">New Product</a>
        <br>
        <br>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
                <th>Featured</th>
                <th>Recommend</th>
                <th>Action</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->featured ? 'Sim' : 'Não' }}</td>
                    <td>{{ $product->recommend ? 'Sim' : 'Não' }}</td>
                    <td>
                        <a href="{{ route('admin.products.edit', ['id'=>$product->id]) }}">Edit</a> |
                        <a href="{{ route('admin.products.images', ['id'=>$product->id]) }}">Images</a> |
                        <a href="{{ route('admin.products.destroy', ['id'=>$product->id]) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>

        {!! $products->render() !!}
    </div>
@endsection