@extends('layout/master')


@section('title', 'Detail Jurusan')
@section('judul', 'Detail Jurusan')
@push('page-styles')
    <style>
        .wysihtml-command-active {
            font-weight: bold;
        }

        [data-wysihtml-dialog] {
            margin: 5px 0 0;
            padding: 5px;
            border: 1px solid #666;
        }

        a[data-wysihtml-command-value="red"] {
            color: red;
        }

        a[data-wysihtml-command-value="green"] {
            color: green;
        }

        a[data-wysihtml-command-value="blue"] {
            color: blue;
        }

        div.editable {
            border: 1px dashed gray;
            padding: 10px;
        }
    </style>
@endpush

@section('container')

    <div class="section-body bg-white p-4">

        <div class="row">
            <div class="col-12">

                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <img class="img-fluid" src="/image/{{ $jurusan->foto }}" alt="...">
                        </div>
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title">{{ $jurusan->nama_jurusan }}</h5>
                                <p class="card-text">
                                    {{ $jurusan->kaprodi }}
                                </p>
                                <p class="card-text">
                                    {!! $jurusan->teks !!}
                                </p>
                                <a href="{{ $jurusan->id }}/edit" class="btn btn-primary">Edit</a>
                                <button class="btn btn-danger swal-confirm" type="submit" data-id="{{ $jurusan->id }}">
                                    <form action="{{ route('delete_jurusan', $jurusan->id) }}" id="delete{{ $jurusan->id }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                    </form>
                                        Hapus
                                </button>
                                <a href="{{ route('data_jurusan') }}" class="btn btn-warning">Kembali</a>
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
