@extends('layout/master')

@section('title', 'Tambah Data Guru')
@section('judul', 'Tambah Data Guru')

@section('container')

    <div class="section-body bg-white">
        <div class="card">
            <form method="POST" action="{{ route('tambah_teacher_proses') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>NIP | Jika belum memiliki nip isi dengan strip ( - )</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" placeholder="Masukan Nip">
                        @error('nip')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukan Nama">
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Bidang / Prodi</label>
                        <input type="text" class="form-control @error('bidang') is-invalid @enderror" name="bidang" value="{{ old('bidang') }}" placeholder="Masukan Bidang / prodi">
                        @error('bidang')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" required="">
                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    <a href="{{route('data_teachers')}}" class="btn btn-danger my-3 ml-4">Kembali</a>
                </div>
            </form>
        </div>
    </div>

@endsection
