@extends('dashboard.layouts.base')
@section('private')
<div class="container mt-2">
    <div class="row">
        <div class="col">
            <h2>Category Name</h2>
            <p>{{$category->name}}</p>
            <hr />
            <h1>Products</h1>
            <ol>
                @foreach($category->Product as $p)
                    <li>{{ $p->name }}</li>
                @endforeach
            </ol>

            <hr />
            <div style="height: 55vh">

            </div>
        </div>
    </div>
</div>
@endsection