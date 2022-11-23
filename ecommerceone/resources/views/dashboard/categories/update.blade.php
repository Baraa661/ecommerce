@extends('dashboard.layouts.base')
@section('private')
<div class="container">
   <h1 class="my-3" style="color: gray;">Update Category</h1>
   <form action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      {{-- @method('put') --}}
      <div class="mb-1">
         <label for="name" class="form-label">Category Name</label>
         <input type="text" name="name" class="form-control" id="name" aria-describedby="name" value="{{ $category->name }}">
      </div>
      

      <button type="submit" class="btn btn-primary mb-2">Submit</button>
   </form>
    <div style="height: 69vh">

    </div>
</div>
@endsection