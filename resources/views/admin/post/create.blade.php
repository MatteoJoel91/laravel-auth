@extends('admin.layouts.base')

@section('content')
    <div class="container">

      <form method="POST" action="{{route('admin.posts.store')}}">

        @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="title" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
          <label for="content" class="form-label">Contenuto post</label>
          <textarea class="form-control" id="content" rows="8" name="content"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Invia</button>

      </form>
    </div>
@endsection