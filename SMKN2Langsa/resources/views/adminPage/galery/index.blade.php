@extends('layout/master')

@section('title', 'Galery Sekolah')
@section('judul', 'Galery Sekolah')

@section('container')

    <div class="section-body bg-white p-4">
        <a href="{{ route('tambah_data_galery') }}" class="btn btn-primary mb-4">Tambah Data</a>

        @if (session('status'))
            <div class="alert alert-success alert-dismissible show fade mb-4">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                  </button>
                  {{ session('status') }}
                </div>
            </div>
        @endif

        <div class="row">
            @foreach ($gallery as $glr)
            <div class="col-sm-12 col-md-3">
                <div class="card">
                    <img src="/image/galleries/{{ $glr->foto }}" class="card-img-top" alt="...">
                    <p class="card-text m-0">{{$glr->deskripsi}}</p>
                    <div class="card-body m-0 p-0">
                        <a href="/galleries/{{ $glr->id }}/edit" class="btn btn-primary">Edit</a>
                        <button class="btn btn-danger swal-confirm" type="submit" data-id="{{ $glr->id }}">
                            <form action="{{ route('delete_galery', $glr->id) }}" id="delete{{ $glr->id }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                            </form>
                                Hapus
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
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
