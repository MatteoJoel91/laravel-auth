@extends('admin.layouts.base')

@section('content')
    <div class="container">

      <h1>Visualizza post</h1>
      <div>Titolo: {{$post->title}}</div>
      <div>Contenuto: {!! $post->content !!}</div>
      <div>Slug {{$post->slug}}</div>
      <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Torna alla lista</a>
    </div>
@endsection