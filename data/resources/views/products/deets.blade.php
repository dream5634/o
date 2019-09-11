@extends('master')

@section('title')
    {{ $item->name }}
@endsection

@section('content')
    <h1>{{ $item->name }} by {{ $item->manufacturer->mfg_name }}</h1>
    <h3>Price: ${{ $item->price }}</h3>

    <p><a href='{{url("product/$item->id/edit")}}'>Edit</a></p>

    <p>
        <form action='{{url("product/$item->id/edit")}}' method="post">
        {{ csrf_field() }} {{ method_field("DELETE") }}
        <input type="submit" value="Delete" style="border: none; text-decoration: none;">
        </form>
    </p>

    <a href="/product/">Back</a>
@endsection