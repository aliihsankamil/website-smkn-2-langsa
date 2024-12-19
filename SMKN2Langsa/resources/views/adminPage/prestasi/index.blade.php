@extends('layout/master')

@section('title', 'Prestasi')
@section('judul', 'Data Prestasi')

@section('container')

<div class="section-body bg-white p-4">
    <a href="{{ url('/prestasi/create') }}" class="btn btn-primary mb-4">Tambah Prestasi</a>
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

    <div class="table-responsive">
        <p class="mt-2 mb-2 text-warning">Aktifkan maksimal <b>3</b> prestasi terbaru untuk ditampilkan di beranda, "Tabel ini diurutkan berdasarkan yang terbaru" <br>
            Data prestasi otomatis masuk ke data berita dalam status aktif, cek di data berita maksimal berita aktif 3/6 berita
        </p>
        <table class="table table-striped table-md">
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Status</th>
                <th colspan="2" style="text-align: center;">Action Status</th>
                <th>Action</th>
            </tr>
            @foreach ($prestasi as $no => $prs)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $prs->judul }}</td>
                <td>{{ $prs->status }}</td>
                <td>
                    <form method="POST" action="/prestasiss/{{ $prs->id }}">
                        @csrf
                        @method('patch')
                        <input type="hidden" name="status" value="aktif">
                        <button type="submit" class="btn btn-success">Aktifkan</button>
                    </form>
                </td>
                <td>
                    <form method="POST" action="/prestasiss/{{ $prs->id }}">
                        @csrf
                        @method('patch')
                        <input type="hidden" name="status" value="tidak">
                        <button type="submit" class="btn btn-danger">Nonaktifkan</button>
                    </form>
                </td>
                <td><a href="/prestasi/{{ $prs->id }}" class="btn btn-primary">Detail</a></td>
            </tr>
            @endforeach
            </table>
        </div>
        {{-- <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $prs->judul }}
            <a href="/prestasi/{{ $prs->id }}" class="badge badge-info">Detail</a>
        </li> --}}
</div>

@endsection
