@extends('dashboard.layouts.base')
@section('private')
<div class="container mt-2">
    <div class="row">
        <div class="col">
            <h2>User Name</h2>
            <p>{{$user->name}}</p>
            <hr />
            <h2>User Email</h2>
            <p>{{$user->email}}</p>
            <hr />
            <div style="height: 64vh">

            </div>
        </div>
    </div>
</div>
@endsection