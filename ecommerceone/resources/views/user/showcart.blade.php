@extends('layouts.base')
@section('content')
<div class="container-fluid">
<table class="table table-striped table-dark table-responsive-lg">
    <thead>
      <tr>
        <th scope="col">Cart Item #</th>
        <th scope="col">Product Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
        @php
        $i = 1
        @endphp
    @foreach ($carts as $cart)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$cart->product_title}}</td>
            <td>{{$cart->quatity}}</td>
            <td>{{$cart->price}}</td>
        </tr>
    @endforeach
 
    </tbody>
  </table>
</div>
@endsection
