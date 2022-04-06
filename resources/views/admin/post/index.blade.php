@extends('admin.layouts.base')

@section('content')
    <div class="container">
      <a href="{{route('admin.posts.create')}}" class="btn btn-primary my-3">Crea un nuovo post</a>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Titolo</th>
              <th scope="col">Contenuto</th>
              <th scope="col">Slug</th>
              <th scope="col">Azioni</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
                <tr>
                  <th>{{$post->id}}</th>
                  <td>{{$post->title}}</td>
                  <td>{{substr($post->content, 0, 30)}}</td>
                  <td>{{$post->slug}}</td>
                  <td></td>
                </tr>
            @endforeach
            
          </tbody>
        </table>
    </div>
@endsection