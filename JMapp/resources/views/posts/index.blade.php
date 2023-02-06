@extends('layouts.app')

@section('content')
<h2>Post Page</h2>
@if(count($posts)>0)

@foreach($posts as $post)
  <div class="well">
    <div class="row">
     <div class="col-md-4 col-md-4">
 <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
     </div>
    <br>
     <div class="col-md-8 col-md-8">
      <h3><a href="/posts/{{$post->id}}">{{$post->title}}</h3></a>
       <small>Written on{{$post->created_at}} by {{$post->user->name}}</small>
     </div>

    </div>

  </div>
@endforeach
@else
<p>No post found</p>
@endif

@endsection
