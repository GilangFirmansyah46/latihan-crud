@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tampilkan Daftar Siswa</div>

                <div class="card-body">
                        <div class="form-group">
                            <label>Nis</label>
                            <input type="text" name="nis" class="form-control" value="{{ $siswa->nis }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" rows="5" readonly>{{ $siswa->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" name="kelas" class="form-control" value="{{ $siswa->kelas->kelas }}" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
