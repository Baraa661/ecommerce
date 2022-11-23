@extends('dashboard.layouts.base')
@section('private')
<div class="container mt-2">
    <div class="row">
        <div class="col">
            <h2>Image</h2>
            <img src="{{$product->image}}" alt="" style="max-width:40vh; max-height:65vh;">
            <hr />
            <h2>Name</h2>
            <P>{{ $product->name }}</P>
            <hr />
            <h2>Category</h2>
            <P>{{ $product->Category->name }}</P>
            <hr />
            <h2>Description</h2>
            <P>{{ $product->description }}</P>
            <hr />
            <h2>Price</h2>
            <P>{{ $product->price }}</P>
            <hr />
            <h2>Quantity</h2>
            <P>{{ $product->quantity }}</P>
        </div>
    </div>
</div>
@endsection