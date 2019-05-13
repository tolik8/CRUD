@extends('layouts.app')

@section('title', 'Products')

@section('content')

<a href="{{ route('home') }}">Home page</a>

<h3>Products</h3>

<table class="table">
    <thead>
        <tr>
            <td><a href="{{ route('products.create') }}"><i class="fas fa-plus-circle text-primary"></i></a></td>
            <th scope="col">ID</th>
            <th scope="col">CODE</th>
            <th scope="col">NAME</th>
            <th scope="col">D_BEGIN</th>
            <th scope="col">D_END</th>
        </tr>
    </thead>
    <tbody>
@foreach ($products as $product)
        <tr>
            <td><a href="/products/{{ $product->id }}/edit"><i class="far fa-edit text-success"></i></a></td>
            <td>
                <form method="POST" action="/products/{{ $product->id }}">
                    @method('delete') @csrf {{ $product->id }}
                    <i class="far fa-minus-square text-danger"></i>
{{--                    <button type="submit"><i class="far fa-minus-square text-danger"></i></button>--}}
                </form>
            </td>
            <td>{{ $product->code }}</td>
            <td><a href="/products/{{ $product->id }}">{{ $product->name }}</a></td>
            <td>{{ $product->d_begin }}</td>
            <td>{{ $product->d_end }}</td>
        </tr>
@endforeach
    </tbody>
</table>

@endsection
