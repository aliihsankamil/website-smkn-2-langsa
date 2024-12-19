@extends('layout/master')

@section('title', 'Berita')
@section('judul', 'Data Berita')

@section('container')

    <div class="section-body bg-white p-4">
        <a href="{{ url('/berita/create') }}" class="btn btn-primary mb-4">Tambah Berita</a>
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
            <p class="mt-2 mb-2 text-warning">Aktifkan maksimal 3-6 berita terbaru untuk ditampilkan di beranda, "Data prestasi juga masuk ke berita, tabel ini diurutkan berdasarkan yang terbaru"</p>
            <table class="table table-striped table-md">
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Status</th>
                    <th colspan="2" style="text-align: center;">Action Status</th>
                    <th>Action</th>
                </tr>
                @foreach ($berita as $brt)
                <tr>
                    <td></td>
                    <td>{{ $brt->judul }}</td>
                    <td>{{ $brt->status_b }}</td>
                    <td>
                        <form method="POST" action="/beritass/{{ $brt->id }}">
                            @csrf
                            @method('patch')
                            <input type="hidden" name="status" value="aktif">
                            <button type="submit" class="btn btn-success">Aktifkan</button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="/beritass/{{ $brt->id }}">
                            @csrf
                            @method('patch')
                            <input type="hidden" name="status" value="tidak">
                            <button type="submit" class="btn btn-danger">Nonaktifkan</button>
                        </form>
                    </td>
                    <td><a href="/berita/{{ $brt->id }}" class="btn btn-info">Detail</a></td>
                </tr>
                @endforeach
                </table>
            </div>
        {{-- @foreach ($berita as $brt)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $brt->judul }}
                <a href="/berita/{{ $brt->id }}" class="badge badge-info">Detail</a>
            </li>
        @endforeach --}}
    </div>

@endsection
