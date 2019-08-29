@extends('layouts.main')
@section('title', 'Form Tambah Data Mhs')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>

        <form method="post" action="/students">
          @csrf
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama" name="nama">
          </div>
          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" value="{{ old('nim') }}" placeholder="Masukkan NIM" name="nim">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Masukkan Email" name="email">
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" value="{{ old('jurusan') }}" placeholder="Masukkan Jurusan" name="jurusan">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
    </div>
  </div>
@endsection
