@extends('layouts.base')

@section('content')
<div class="container">
    <ul class="list-group my-3">   
        @foreach ($products as $product)
            <li class="list-group-item">
                <div class="card" style="width: 250px; height:500px;">
                    <img src="{{$product->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{substr($product->name, 0, 10)}}</h5>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <div class="row">
                        <div class="col">
                          <div class="icon-container">
                            <i class="fa-solid fa-heart"></i>
                          </div>
                        </div>
                        <div class="col">
                          <div class="icon-container">
                            <i class="fa-solid fa-cart-shopping"></i>
                          </div>
                        </div>
                        <div class="col">
                          <div class="icon-container">
                            <i class="fa-solid fa-share-nodes"></i>
                          </div>
                        </div>
                        <div class="col"></div>
                        <div class="col"></div>
                      </div>
                    </div>
                </div>    
            </li>
        @endforeach
    </ul>
</div>
@endsection