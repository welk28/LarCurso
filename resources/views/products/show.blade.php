@extends('layouts.master')
@section('content')
    <h1>datos del producto</h1>
    <h1>{{ $product->title }} {{ $product->id }}</h1>
    <p>{{ $product->price }}</p>
    <p>{{ $product->description }}</p>
    <p>{{ $product->stock }}</p>
    <p>{{ $product->status }}</p>
@endsection
