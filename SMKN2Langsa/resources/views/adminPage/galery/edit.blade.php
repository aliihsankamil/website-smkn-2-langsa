@extends('layout/master')

@section('title', 'Edit Gallery Sekolah')
@section('judul', 'Edit Gallery Sekolah')

@section('container')

    <div class="section-body bg-white p-4">
        <form method="post" action="/gallery/{{ $gallery->id }}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ $gallery->deskripsi }}" placeholder="Masukan deskripsi">
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
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-3">
                        <img class="img-fluid" src="/image/galleries/{{$gallery->foto}}" alt="">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('data_gallery') }}" class="btn btn-danger">Kembali</a>
        </form>
    </div>

@endsection
