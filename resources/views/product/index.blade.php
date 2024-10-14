@extends('layouts.home')
@section('content')

    <a href="{{ route('product.create')}}">agregar productos</a>
    <h1>Productos:</h1>
    <ul>
        @forelse ($products as $product)
            <li>
                Nombre: {{ $product->name }}<br>
                Descripción: {{ $product->description }}<br>
                Precio: {{ $product->price }}

                <form action="{{ route ('product.destroy', $product->id)}}" method="post">
                    @method("DELETE")
                    @csrf
                    <a href="{{ route ('product.edit', $product->id)}}">✏️</a>
                    <input type="submit" value="🗑️" />
                </form>
            </li>
        @empty
        <li>No data</li>
        @endforelse
    </ul>
@endsection