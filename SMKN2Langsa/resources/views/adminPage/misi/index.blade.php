@extends('layout/master')

@section('title', 'Misi Sekolah')
@section('judul', 'Misi Sekolah')

@section('container')

    <div class="section-body bg-white p-4">
        {{-- <a href="{{route('tambah_misi')}}" class="btn btn-primary my-3 ml-4">Tambah Data Misi</a> --}}

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

        <form method="POST" action="{{ route('tambah_misi_proses') }}" class="ewrapper">
            @csrf
            <div class="form-group">
                <label>Misi</label>
                <div class="toolbar" style="display: none; font-family:'Times New Roman', Times, serif;">
                    <a class="btn btn-outline-dark" data-wysihtml-command="bold" title="CTRL+B"><b>B</b></a>
                    <a class="btn btn-outline-dark" data-wysihtml-command="italic" title="CTRL+I"><i>I</i></a>
                    <a class="btn btn-outline-dark" data-wysihtml-command="superscript" title="sup">X<sup>2</sup></a>
                    <a class="btn btn-outline-dark" data-wysihtml-command="subscript" title="sub">X<sub>2</sub></a>
                    <a class="btn btn-outline-dark" data-wysihtml-command="createLink">link</a>
                    <a class="btn btn-outline-dark" data-wysihtml-command="removeLink"><s>link</s></a>
                    <a class="btn btn-outline-dark" data-wysihtml-command="insertImage">image</a>
                    <a class="btn btn-outline-dark" data-wysihtml-command="formatBlock" data-wysihtml-command-value="h1">h1</a>
                    <a class="btn btn-outline-dark" data-wysihtml-command="formatBlock" data-wysihtml-command-value="h2">h2</a>
                    <a class="btn btn-outline-dark" data-wysihtml-command="formatBlock" data-wysihtml-command-blank-value="true">plaintext</a>
                    <a class="btn btn-outline-dark" data-wysihtml-command="insertUnorderedList">Bullets</a>
                    <a class="btn btn-outline-dark" data-wysihtml-command="insertOrderedList">Numbering</a>
                    {{-- <a class="btn btn-primary" data-wysihtml-command="foreColor" data-wysihtml-command-value="red">red</a> --}}
                    {{-- <a class="btn btn-primary" data-wysihtml-command="foreColor" data-wysihtml-command-value="green">green</a> --}}
                    {{-- <a class="btn btn-primary" data-wysihtml-command="foreColor" data-wysihtml-command-value="blue">blue</a> --}}
                    <a class="btn btn-outline-dark" data-wysihtml-command="formatCode" data-wysihtml-command-value="language-html">Code</a>
                    <a class="btn btn-outline-dark" data-wysihtml-command="undo">undo</a>
                    <a class="btn btn-outline-dark" data-wysihtml-command="redo">redo</a>
                    {{-- <a class="btn btn-success" data-wysihtml-command="insertSpeech">speech</a> --}}
                    {{-- <a class="btn btn-success" data-wysihtml-action="change_view">switch to html view</a> --}}

                    <div data-wysihtml-dialog="createLink" style="display: none; margin-top: 10px;">
                        <label>
                        Link:
                        <input class="form-control" data-wysihtml-dialog-field="href" value="http://">
                        </label>
                        <a class="btn btn-success text-white" data-wysihtml-dialog-action="save">OK</a>&nbsp;<a data-wysihtml-dialog-action="cancel" class="btn btn-danger text-white">Cancel</a>
                    </div>

                    <div data-wysihtml-dialog="insertImage" style="display: none; margin-top: 10px;">
                        <label>
                        Image:
                        <input class="form-control" data-wysihtml-dialog-field="src" value="http://">
                        </label>
                        <label>
                        Align:
                        <select class="form-control" data-wysihtml-dialog-field="className">
                            <option value="">default</option>
                            <option value="wysiwyg-float-left">left</option>
                            <option value="wysiwyg-float-right">right</option>
                        </select>
                        </label>
                        <a class="btn btn-success text-white" data-wysihtml-dialog-action="save">OK</a>&nbsp;<a data-wysihtml-dialog-action="cancel" class="btn btn-danger text-white">Cancel</a>
                    </div>
                </div>

                <textarea class="editable form-control mt-2 @error('misi') is-invalid @enderror" name="misi" value="{{ old('misi') }}" style="height: 500px;" placeholder="Masukan Misi" ></textarea>
                @error('misi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
        <hr/>
        <h4>Misi Sekolah</h4>
        @foreach ($mission as $ms)
            <p class="mb-0">{!! $ms->teks !!}</p>
            <a href="{{ route('edit_misi',$ms->id) }}" class="btn btn-primary">
                Edit
            </a>
            <button type="submit" data-id="{{ $ms->id }}" class="btn btn-danger swal-confirm">
                <form action="{{ route('delete_misi', $ms->id) }}" id="delete{{ $ms->id }}" method="POST">
                    @csrf
                    @method('delete')
                </form>
                Hapus
            </button>
        @endforeach
        {{-- {{ $mission->links() }} --}}
    </div>

@endsection

@push('page-scripts')

<script src="{{ asset('../assets/wysihtml-0.6.0-beta/dist/wysihtml.js')}}"></script>
<script src="{{ asset('../assets/wysihtml-0.6.0-beta/dist/wysihtml.all-commands.js')}}"></script>
<script src="{{ asset('../assets/wysihtml-0.6.0-beta/dist/wysihtml.table_editing.js')}}"></script>
<script src="{{ asset('../assets/wysihtml-0.6.0-beta/dist/wysihtml.toolbar.js')}}"></script>
<script src="{{ asset('../assets/wysihtml-0.6.0-beta/parser_rules/advanced_unwrap.js')}}"></script>
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
    <script>
        var editors = [];

        $('.ewrapper').each(function(idx, wrapper) {
        var e = new wysihtml.Editor($(wrapper).find('.editable').get(0), {
            toolbar:        $(wrapper).find('.toolbar').get(0),
            parserRules:    wysihtmlParserRules,
            stylesheets:  "css/stylesheet.css"
            //showToolbarAfterInit: false
        });
        editors.push(e);
        });

    </script>
@endpush
