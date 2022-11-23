@extends('dashboard.layouts.base')
@section('private')
<div class="container">
   <h1 class="my-3" style="color: gray;">Update Product</h1>
   <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      {{-- @method('put') --}}
      <div class="mb-1">
         <label for="name" class="form-label">Product Name</label>
         <input type="text" name="name" class="form-control" id="name" aria-describedby="name" value="{{ $product->name }}">
      </div>
      <div class="mb-1">
         <label for="price" class="form-label">Product Price</label>
         <input type="number" name="price" class="form-control" id="price" aria-describedby="price" value="{{ $product->price }}">
      </div>
      <div class="mb-1">
         <label for="category" class="form-label">Category</label>
         <select name="category_id" id="category" class="form-select form-control" aria-label="category">
            @foreach($categories as $c)
                  <option value="{{ $c->id }}">{{ $c->name }}</option>
            @endforeach
         </select>
      </div>
      <div class="mb-1">
         <label for="description" class="form-label">Product Description</label>
         <textarea name="description" class="form-control" id="description" rows="1" aria-describedby="description" style="min-height: 30vh; color:gray;">{{$product->description}}</textarea>
      </div>
      <div class="mb-1">
         <label for="quantity" class="form-label">Product Quantity</label>
         <input type="number" name="quantity" class="form-control" id="quantity" aria-describedby="quantity" value="{{ $product->quantity }}">
      </div>
      <div class="my-2">
        <label for="oldimage" class="form-label">Old Image</label>
        <br>
        <img src="{{$product->image}}" id="oldimage" alt="" style="max-width:40vh; max-height:65vh;">
     </div>
      <div class="mb-2">
         <label for="exampleFormControlFile1">Product Image</label>
         <input type="file" name='file' class="form-control-file" id="exampleFormControlFile1">
       </div>

      <button type="submit" class="btn btn-primary mb-2">Submit</button>
   </form>
</div>
@endsection