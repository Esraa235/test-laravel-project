
@extends('layouts.app')
@section('title','Create Post')
@section('content')
<div class="card">
   <div class="card-body">
    <h2 class="card-title">Create Post</h2>
     @if($errors->any())
         <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            </ul>
         </div>
     @endif
         <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                  <label for="Title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="Title" required  name="Title">
                </div>
                <div class="mb-3">
                  <label for="Description" class="form-label">Description</label>
                  <textarea type="text" class="form-control" id="Description" required name="Description">
                </div>
                <div class="mb-3 ">
                    <label for="image" class="form-label">image</label>
                  <input type="file" class="form-check-file" id="image" name="image">
                  @if($post->image)
                  <img src="{{asset('image/' . $post->image)}}" alt="Post Image">
                  @endif
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
              </form>
   </div>
</div>
@endsection