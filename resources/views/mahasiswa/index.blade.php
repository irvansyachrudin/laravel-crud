@extends('layouts.main')
@section('title', 'Daftar Mhs')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">Daftar Mahasiswa</h1>

      <table class="table">
        <thead class="thead-dark">
          <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">NIM</th>
          <th scope="col">Email</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
          @foreach($mahasiswa as $mhs)
          <tr>
            <td scope="row">{{ $loop->iteration }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->email }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>
              <a href="#" class="badge badge-success">Ubah</a>
              <a href="#" class="badge badge-danger">Hapus</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
