@extends('layout/master')

@section('title', 'Data Jurusan')
@section('judul', 'Data Jurusan')

@section('container')

    <div class="section-body p-4 bg-white">
        <a href="{{ url('/jurusans/create') }}" class="btn btn-primary mb-4">Tambah Jurusan</a>

        @if (session('status'))
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                  </button>
                  {{ session('status') }}
                </div>
            </div>
        @endif

        @foreach ($jurusan as $jrs)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $jrs->nama_jurusan }}
                <a href="/jurusan/{{ $jrs->id }}" class="badge badge-info">Detail</a>
            </li>
        @endforeach
    </div>

@endsection
