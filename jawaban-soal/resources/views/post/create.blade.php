@extends('layouts.app')

@section('content')
    <h1>Posting Berita Baru</h1>
    <form action="{{'/post'}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukan Judul" aria-describedby="helpId">
            @error('judul')
                <small id="helpId" class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
          <label for="isi">Isi</label>
          <textarea class="form-control" name="isi" id="isi" rows="3"></textarea>
          @error('isi')
                <small id="helpId" class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Kirim</button>
    </form>
@endsection