@extends('layout.master')
@section('content')
<div class="comment-form-wrap pt-5">
    <h3 class="mb-5">Create New Post</h3>
    <form action="{{route('posts.store')}}" class="p-5 bg-light" mehtod="POST">
      <div class="form-group">
        <label for="name">Title *</label>
        <input type="text" class="form-control" id="name" name="tittle">
      </div>
     
        
      <div class="form-group">
        <label for="message">Subject</label>
        <textarea name="subject" id="message" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="Post Comment" class="btn btn-primary">
      </div>

    </form>
  </div>
  @endsection
