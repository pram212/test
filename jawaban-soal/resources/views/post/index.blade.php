@extends('layouts.app')

@section('content')
  @if (Session::get('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>{{Session::get('success')}}</strong> 
        </div>
        
        <script>
          $(".alert").alert();
        </script>
    @endif
<a href="{{url('/post/create')}}" class="btn btn-success mt-2">Baru</a>
@foreach ($post as $p)
<div class="card mt-2">
    <div class="card-header d-flex justify-content-between">
      {{$p->user->name}}
      <div class="button">
          <a href="/post/{{$p->id}}/edit">Edit</a>
          <form action="/post/{{$p->id}}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-sm btn-danger">hapus</button>
          </form>
      </div>
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$p->judul}}</h5>
      <p class="card-text">{{$p->isi}}</p>
    </div>
  </div>
@endforeach
@endsection