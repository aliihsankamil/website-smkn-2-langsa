@extends('layout/master')

@section('title', 'Form Ubah Data Guru')
@section('judul', 'Form Ubah Data Guru')

@section('container')

    <div class="section-body bg-white">
        <div class="card">
            <form method="post" action="/teachers/{{ $teacher->id }}" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ $teacher->nip }}" placeholder="Masukan Nip">
                        @error('nip')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $teacher->nama }}" placeholder="Masukan Nama">
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Bidang / Prodi</label>
                        <input type="text" class="form-control @error('bidang') is-invalid @enderror" name="bidang" value="{{ $teacher->bidang }}" placeholder="Masukan Bidang / prodi">
                        @error('bidang')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="form-control @error('foto_edit') is-invalid @enderror" name="foto">
                        @error('foto_edit')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="row mt-3">
                            <div class="col-sm-12 col-md-3">
                                <img class="img-fluid" src="/image/guru/{{$teacher->foto}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                </div>
            </form>
        </div>
    </div>

@endsection
