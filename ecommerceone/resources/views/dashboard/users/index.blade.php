@extends('dashboard.layouts.base')
@section('private')
<div id="content" class="p-4 p-md-5 pt-5">
    <a href='{{url('adduser')}}' class="btn btn-outline-primary">Add User</a>
    <div class="container mt-4">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$user->name}}</td>
                        
                        <td >
                            <a href="{{ route('user.show', $user) }}" class="btn btn-outline-success">Show</a>
                            <a href="{{ route('user.edit', $user) }}" class="btn btn-outline-warning">Update</a>
                            <a href="{{ route('user.delete', $user) }}" class="btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
    </div>
</div>
@endsection