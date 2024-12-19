@extends('layout/master')

@section('title', 'Data Guru')
@section('judul', 'Data Guru')

@section('container')

    <div class="section-body bg-white p-4">

        <div class="row">
            <div class="col-12">
                <a href="{{ route('tambah_teacher') }}" class="btn btn-primary mb-4">Tambah Data</a>
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible show fade my-4">
                        <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        {{ session('status') }}
                        </div>
                    </div>
                @endif

                <ul class="list-group">
                    @foreach ($teacher as $tch)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $tch->nama }}
                            <a href="/teachers/{{ $tch->id }}" class="badge badge-info">Detail</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{--
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
