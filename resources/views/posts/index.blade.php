@extends('layouts.app')
  @section('content')
   <div class="text-center">
      <a href="{{route('posts.create')}}" class="btn btn-success mt-3">Create Post</a>
   </div>

   <div class="container mt-3">
    <table class="table">
    <thead>
        <tr>
            <th scope="col" style="color:red;">Pagination in lab 2</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
          <tr>
            <th scope="row">{{$post['id']}}</th>
            <td>{{$post['title']}}</td>
            <td>{{$post['posted_by']}}</td>
            <td>{{$post['created_at']}}</td>
            <td>
              <a href="{{ route('posts.show',['post'=>$post['id']]) }}" class="btn btn-info"> View</a>
              <a href="{{route('posts.edit',['post'=>$post['id']] )}}" class="btn btn-primary">Edit</a>
              <a href="#" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach  
    </tbody>
    </table>
  </div>

  <div class="container">
    <p style="color:red;">Pagination in lab 2</p>
  </div>
  @endsection
  