@extends('layouts.master')
@section('content')
    <h1>Edit a product</h1>
    <form action="{{ route('products.update', ['product'=> $product->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <label for="">Title</label>
            <input class="form-control" type="text" name="title" value="{{ $product->title}}" required>
        </div>
        <div class="form-row">
            <label for="">Description</label>
            <input class="form-control" type="text" name="description" value="{{ $product->description }}" required>
        </div>
        <div class="form-row">
            <label for="">Price</label>
            <input class="form-control" type="number" min="1.00" step="0.01" name="price" value="{{ $product->price}}" required>
        </div>
        <div class="form-row">
            <label for="">Stock</label>
            <input class="form-control" type="number" min="0" name="stock" value="{{ $product->stock}}" required>
        </div>
        <div class="form-row">
            <label for="">Status</label>
            <select class="custom-select" name="status" id="">
                
                <option {{ $product->status =='available' ? 'selected' : '' }} value="available">Available</option>
                <option {{ $product->status =='unavailable' ? 'selected' : '' }} value="unavailable">Unavailable</option>
            </select>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-lg">Create product</button>
        </div>
    </form>
    
@endsection
