@extends('layouts.app')

@section('content')
<h2>Edit Post</h2>
{!! Form::open(['action'=> ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title', $post->title, ['class'=>'form-control','placehoder'=>'Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body', $post->body, ['id'=>'article-ckeditor', 'class'=>'form-control','placehoder'=>'Body text'])}}
    </div>
    <div class="from-group mt-2">
        {{Form::file('cover_image')}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('submit',['class'=>'btn btn-primary mt-2'])}}
{!! Form::close() !!}

@endsection