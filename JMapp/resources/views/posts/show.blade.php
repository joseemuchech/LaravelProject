@extends('layouts.app')

@section('content')
<a href="/" class="btn btn-primary">Go Back</a>
<h2>{{$post->title}}</h2>
<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
<div>
    {{$post->body}}
</div>
<hr/>
<small>Written on{{$post->created_at}} by {{$post->user->name}}</small>

@if(!Auth::guest())
  @if(Auth::user()->id == $post->user_id)
    <table class="table">
        
<tr>
<td><a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a></td>
    <td>
        {!!Form::open(['action' =>['App\Http\Controllers\PostsController@destroy',$post->id], 'method'=>'POST', 'class'=>'start-end'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
         {!! Form::close() !!}
    </td>
</tr>
    </table>
    @endif
@endif


@endsection