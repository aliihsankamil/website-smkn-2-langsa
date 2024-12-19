@extends('layout/master')

@section('title', 'Tambah Gallery Sekolah')
@section('judul', 'Tambah Gallery Sekolah')

@section('container')

    <div class="section-body bg-white p-4">
        <form action="{{ route('tambah_gallery_proses') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi') }}" placeholder="Masukan deskripsi">
                @error('deskripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                @error('foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('data_gallery') }}" class="btn btn-danger">Kembali</a>
        </form>
    </div>

@endsection
