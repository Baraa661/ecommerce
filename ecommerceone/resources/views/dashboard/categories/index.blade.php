@extends('dashboard.layouts.base')
@section('private')
<div id="content" class="p-4 p-md-5 pt-5">
    <a href='{{url('addcategory')}}' class="btn btn-outline-primary">Add Category</a>
    <div class="container mt-4">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$category->name}}</td>
                        
                        <td >
                            <a href="{{ route('category.show', $category) }}" class="btn btn-outline-success">Show</a>
                            <a href="{{ route('category.edit', $category) }}" class="btn btn-outline-warning">Update</a>
                            <a href="{{ route('category.delete', $category) }}" class="btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
</div>
@endsection