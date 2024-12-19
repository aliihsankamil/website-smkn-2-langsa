@extends('layout/master')


@section('title', 'Detail Berita')
@section('judul', 'Detail Berita')

@section('container')

    <div class="section-body bg-white p-4">

        <div class="row">
            <div class="col-12">

                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <img class="img-fluid" src="/image/berita/{{ $berita->foto }}" alt="...">
                        </div>
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">{{ $berita->judul }}</h5>
                                <p class="card-text">
                                    {{ $berita->tanggal }} | {{ $berita->lokasi }}
                                </p>
                                <p class="card-text">
                                    {!! $berita->teks !!}
                                </p>
                                <a href="{{ $berita->id }}/edit" class="btn btn-primary">Edit</a>
                                <button class="btn btn-danger swal-confirm" type="submit" data-id="{{ $berita->id }}">
                                    <form action="{{ route('delete_berita', $berita->id) }}" id="delete{{ $berita->id }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                    </form>
                                        Hapus
                                </button>
                                <a href="{{ route('data_berita') }}" class="btn btn-warning">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@push('page-scripts')

<script src="{{ asset('../assets/js/sweetalert.min.js')}}"></script>

@endpush

@push('after-scripts')
    <script>
        $(".swal-confirm").click(function(e) {
            id = e.target.dataset.id;
            swal({
                title: 'Yakin hapus data?',
                text: 'Data yang sudah dihapus tidak bias kembalikan',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal('Data berhasil di hapus!', {
                        icon: 'success',
                    });
                    $(`#delete${id}`).submit();
                } else {
                    // swal('Data batal dihapus');
                }
            });
        });
    </script>

@endpush
