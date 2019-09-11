@extends('master')

@section('title')
    Create/ Update
@endsection

@section('content')
    @if (!empty($item))
        <h2>Update the Item</h2>
    @else
        Create an Item
    @endif

    <form method="POST"
    
        action='{{url("product")}}'
    >
        {{ csrf_field() }}
        @if (isset($item))
            
        @endif
        <p>Name: <input type="text" name="name"
            @if (isset($item)) value="{{ $item->name }}"@endif>
        </p>

        <p>Price: <input type="text" name="price"
            @if (isset($item)) value="{{ $item->price }}"@endif>
        </p>

        <p>Manufacturer: <select name="manufacturer" >

                @if (isset($item))
                    <option value="{{ $item->manufacturer_id }}">{{ $item->manufacturer->mfg_name }}</option>
                @endif

                @foreach ($manufacturers as $manufacturer)
                    @if (!isset($item) || $item->manufacturer_id != $manufacturer->id)
                        <option value="{{ $manufacturer->id }}">{{ $manufacturer->mfg_name }}</option>
                    @endif
                @endforeach
            </select>
        </p>

        <input type="submit"
               
                        value="Create"
                   
               style="order: none; text-decoration: none;">
    </form>

    <a href="/product/">Back</a>
@endsection