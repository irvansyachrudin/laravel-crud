@extends('layouts.main')
@section('title', 'Form Ubah Data Mhs')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>

        <form method="post" action="/students/{{ $student->id }}">
          @method('patch')
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
            <input type="text" class="form-control" id="nama" value="{{ $student->nama  }}" placeholder="Masukkan Nama" name="nama">
          </div>
          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" value="{{ $student->nim  }}" placeholder="Masukkan NIM" name="nim">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" value="{{ $student->email  }}" placeholder="Masukkan Email" name="email">
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" value="{{ $student->jurusan  }}" placeholder="Masukkan Jurusan" name="jurusan">
          </div>

          <button type="submit" class="btn btn-primary">Ubah Data!</button>
        </form>

      </div>
    </div>
  </div>
@endsection
