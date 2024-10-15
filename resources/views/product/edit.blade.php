@extends('layouts.home')
@section('content')

<div class="contenedor">
    <h1>Edit product: {{$product->name}}</h1>
    <form action="{{route ('product.update', $product->id)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" value="{{$product->name}}" required/>
        <input type="text" name="description" value="{{$product->description}}" />
        <input type="number" name="price" value="{{$product->price}}" required/>
        <input type="submit" value="Update" />
    </form>
</div>
@endsection