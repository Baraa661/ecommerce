@extends('dashboard.layouts.base')
@section('private')
<div id="content" class="p-4 p-md-5 pt-5">
    <a href='{{url('addproduct')}}' class="btn btn-outline-primary">Add Product</a>
    <div class="container mt-4">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td >
                            <a href="{{ route('product.show', $product) }}" class="btn btn-outline-success">Show</a>
                            <a href="{{ route('product.edit', $product) }}" class="btn btn-outline-warning">Update</a>
                            <a href="{{ route('product.delete', $product) }}" class="btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
</div>
@endsection