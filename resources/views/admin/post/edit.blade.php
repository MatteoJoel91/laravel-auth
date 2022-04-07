@extends('admin.layouts.base')

@section('content')
    <div class="container">

      <h1>Modifica il post</h1>

      <form method="POST" action="{{route('admin.posts.update', $post->id)}}">

        @csrf

        @method('PUT')

        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="title" class="form-control" id="title" name="title" value="{{old('title', $post->title)}}">
        </div>

        <div class="mb-3">
          <label for="content" class="form-label">Contenuto post</label>
          <textarea class="form-control" id="content" rows="8" name="content">{{old('content', $post->content)}}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Invia</button>
        <a href="{{route('admin.posts.index')}}" class="btn btn-danger">Annulla</a>

      </form>
    </div>
@endsection