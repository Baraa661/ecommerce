@extends('dashboard.layouts.base')
@section('private')
<div class="container">
   <h1 class="my-3" style="color: gray;">Create Category</h1>
   <form action="{{ url('uploaduser')}}" method="post" enctype="multipart/form-data">
      @csrf
        <div class="mb-1">
            <label for="name" class="form-label">User Name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="name">
        </div>
        <div class="mb-1">
            <label for="email" class="form-label">User Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="email">
        </div>
        <div class="mb-1">
            <label for="password" class="form-label">User Password</label>
            <input type="password" name="password" class="form-control" id="password" aria-describedby="password">
        </div>
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
   </form>
   <div style="height: 69vh">

   </div>
</div>
@endsection