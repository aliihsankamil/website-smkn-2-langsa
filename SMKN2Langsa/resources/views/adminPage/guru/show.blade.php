@extends('layout/master')

@section('title', 'Detail Guru')
@section('judul', 'Detail Guru')

@section('container')

    <div class="section-body bg-white p-4">

        <div class="row">
            <div class="col-12">

                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="img-fluid" src="/image/guru/{{ $teacher->foto }}" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                {{-- <p class="card-text">
                                    <br/>
                                </p> --}}
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td><b>{{ $teacher->nama }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>NIP</td>
                                            <td>:</td>
                                            <td>{{ $teacher->nip }}</td>
                                        </tr>
                                        <tr>
                                            <td>Bidang</td>
                                            <td>:</td>
                                            <td>{{ $teacher->bidang }}</td>
                                        </tr>
                                    </table>
                                </div>
                                <a href="{{ $teacher->id }}/edit" class="btn btn-primary">Edit</a>
                                <button class="btn btn-danger swal-confirm" type="submit" data-id="{{ $teacher->id }}">
                                    <form action="{{ route('delete_teacher', $teacher->id) }}" id="delete{{ $teacher->id }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                    </form>
                                        Hapus
                                </button>
                                <a class="btn btn-warning" href="{{ route('data_teachers') }}">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- @if (session('status'))
            <div class="alert alert-success alert-dismissible show fade mt-4">
                <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ session('status') }}
                </div>
            </div>
        @endif

        <table class="table table-striped table-md my-4">
            <tr>
              <th>#</th>
              <th>NIP</th>
              <th>Nama</th>
              <th>Bidang</th>
              <th colspan="2" class="text-center">Aksi</th>
            </tr>
            @foreach ($teacher as $no => $tch)
            <tr>
                <td>{{ $teacher->firstItem()+$no }}</td>
                <td>{{ $tch->nip }}</td>
                <td>{{ $tch->nama }}</td>
                <td>{{ $tch->bidang }}</td>
                <td>
                    <a href="" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <button class="btn btn-danger swal-confirm" type="submit" data-id="{{ $tch->id }}">
                        <form action="{{ route('delete_teacher', $tch->id) }}" id="delete{{ $tch->id }}" method="post">
                            @csrf
                            @method('delete')
                        </form>
                        Hapus
                    </button>
                </td>
            </tr>
            @endforeach
        </table> --}}


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
