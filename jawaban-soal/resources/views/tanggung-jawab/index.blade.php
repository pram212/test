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
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Slug</th>
                <th>Name</th>
                <th>User</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tanggungjawab as $t)
            <tr>
                <td scope="row">{{$loop->iteration}}</td>
                <td>{{$t->slug}}</td>
                <td>{{$t->name}}</td>
                <td>
                    @foreach ($t->user as $user)
                        {{$user->name}},
                    @endforeach
                </td>
                <td>
                    <a href="{{url('tanggung-jawab/edit')}}" class="btn btn-sm">edit</a>
                    <form action="{{url('tanggung-jawab/'.$t->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger">delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection