@extends('layouts.home')
@section('content')

<div class="contenedor">
    <a href={{ route('product.index')}}>volver</a>
    <h1>agregar productos</h1>
    <form action="{{ route('product.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name"/>
        <input type="text" name="description" placeholder="description"/>
        <input type="number" name="price" placeholder="price"/>     
        <input type="submit" value="agregar producto" /> 
    </form>
    @error('name')
    <p class="error">{{ $message}}</p>
    @enderror
</div>
@endsection