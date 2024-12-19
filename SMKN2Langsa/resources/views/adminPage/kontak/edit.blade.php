@extends('layout/master')

@section('title', 'Edit Data Sekolah')
@section('judul', 'Edit Data Sekolah')

@section('container')

    <div class="section-body bg-white">
        <a href="{{route('data_kontak')}}" class="btn btn-danger my-3 ml-4">Kembali</a>
        <div class="card">
            <form method="POST" action="{{ route('edit_kontak_proses',$data_kontak->id) }}">
                @csrf
                @method('patch')
                <div class="card-body">
                    <div class="form-group">
                        <label>NPSN</label>
                        <input type="text" class="form-control @error('npsn') is-invalid @enderror" name="npsn"
                        @if (old('npsn'))
                            value="{{ old('npsn') }}"
                        @else
                            value="{{ $data_kontak->npsn }}"
                        @endif
                        placeholder="Masukan NPSN">
                        @error('npsn')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Nama Sekolah</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                        @if (old('nama'))
                            value="{{ old('nama') }}"
                        @else
                            value="{{ $data_kontak->nama_sekolah }}"
                        @endif
                        placeholder="Masukan Nama Sekolah">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Kepala Sekolah</label>
                        <input type="text" class="form-control @error('kepsek') is-invalid @enderror" name="kepsek"
                        @if (old('kepsek'))
                            value="{{ old('kepsek') }}"
                        @else
                            value="{{ $data_kontak->nama_kepsek }}"
                        @endif
                        placeholder="Masukan Kepala Sekolah">
                        @error('kepsek')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Alamat Sekolah</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                        @if (old('alamat'))
                            value="{{ old('alamat') }}"
                        @else
                            value="{{ $data_kontak->alamat }}"
                        @endif
                        placeholder="Masukan Alamat Sekolah">
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email Sekolah</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                        @if (old('email'))
                            value="{{ old('email') }}"
                        @else
                            value="{{ $data_kontak->email }}"
                        @endif
                        placeholder="Masukan Email Sekolah">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Telp/Fax</label>
                        <input type="text" class="form-control @error('telpfax') is-invalid @enderror" name="telpfax"
                        @if (old('telpfax'))
                            value="{{ old('telpfax') }}"
                        @else
                            value="{{ $data_kontak->telpfax }}"
                        @endif
                        placeholder="Masukan Telp/Fax">
                        @error('telpfax')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Instagram</label>
                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram"
                        @if (old('instagram'))
                            value="{{ old('instagram') }}"
                        @else
                            value="{{ $data_kontak->instagram }}"
                        @endif
                        placeholder="Masukan Instagram">
                        @error('instagram')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook"
                        @if (old('facebook'))
                            value="{{ old('facebook') }}"
                        @else
                            value="{{ $data_kontak->facebook }}"
                        @endif
                        placeholder="Masukan Facebook">
                        @error('facebook')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Twitter</label>
                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter"
                        @if (old('twitter'))
                            value="{{ old('twitter') }}"
                        @else
                            value="{{ $data_kontak->twitter }}"
                        @endif
                        placeholder="Masukan Twitter">
                        @error('twitter')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Youtube</label>
                        <input type="text" class="form-control @error('youtube') is-invalid @enderror" name="youtube"
                        @if (old('youtube'))
                            value="{{ old('youtube') }}"
                        @else
                            value="{{ $data_kontak->youtube }}"
                        @endif
                        placeholder="Masukan Youtube">
                        @error('youtube')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
