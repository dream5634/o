@extends('master')

@section('title')
    View All Products
@endsection

@section('content')
    <ul>
        @foreach ($products as $item)
            <li>
                <a href="product/{{ $item->id }}">
                    <h2>{{ $item->name }}</h2>
                </a>
            </li>
        @endforeach
    </ul>

    <a href="product/create">Create a product</a>
@endsection