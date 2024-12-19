@extends('layout/master')

@section('title', 'Data Sambutan Kepala Sekolah')
@section('judul', 'Data Sambutan Kepala Sekolah')

@section('container')

    <div class="section-body bg-white p-4 p-4 bg-white mb-4">
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
        <form method="POST" action="{{ route('tambah_sambutan_proses') }}" class="ewrapper">
            @csrf
            <div class="form-group">
                <label>Teks Sambutan</label>

                <div class="toolbar" style="display: none;">
                    <a data-wysihtml-command="bold" title="CTRL+B">bold</a> |
                    <a data-wysihtml-command="italic" title="CTRL+I">italic</a> |
                    <a data-wysihtml-command="superscript" title="sup">superscript</a> |
                    <a data-wysihtml-command="subscript" title="sub">subscript</a> |
                    <a data-wysihtml-command="createLink">link</a> |
                    <a data-wysihtml-command="removeLink"><s>link</s></a> |
                    <a data-wysihtml-command="insertImage">insert image</a> |
                    <a data-wysihtml-command="formatBlock" data-wysihtml-command-value="h1">h1</a> |
                    <a data-wysihtml-command="formatBlock" data-wysihtml-command-value="h2">h2</a> |
                    <a data-wysihtml-command="formatBlock" data-wysihtml-command-blank-value="true">plaintext</a> |
                    <a data-wysihtml-command="insertUnorderedList">insertUnorderedList</a> |
                    <a data-wysihtml-command="insertOrderedList">insertOrderedList</a> |
                    <a data-wysihtml-command="foreColor" data-wysihtml-command-value="red">red</a> |
                    <a data-wysihtml-command="foreColor" data-wysihtml-command-value="green">green</a> |
                    <a data-wysihtml-command="foreColor" data-wysihtml-command-value="blue">blue</a> |
                    <a data-wysihtml-command="formatCode" data-wysihtml-command-value="language-html">Code</a> |
                    <a data-wysihtml-command="undo">undo</a> |
                    <a data-wysihtml-command="redo">redo</a> |
                    <a data-wysihtml-command="insertSpeech">speech</a>
                    <a data-wysihtml-action="change_view">switch to html view</a>

                    <div data-wysihtml-dialog="createLink" style="display: none;">
                      <label>
                        Link:
                        <input data-wysihtml-dialog-field="href" value="http://">
                      </label>
                      <a data-wysihtml-dialog-action="save">OK</a>&nbsp;<a data-wysihtml-dialog-action="cancel">Cancel</a>
                    </div>

                    <div data-wysihtml-dialog="insertImage" style="display: none;">
                      <label>
                        Image:
                        <input data-wysihtml-dialog-field="src" value="http://">
                      </label>
                      <label>
                        Align:
                        <select data-wysihtml-dialog-field="className">
                          <option value="">default</option>
                          <option value="wysiwyg-float-left">left</option>
                          <option value="wysiwyg-float-right">right</option>
                        </select>
                      </label>
                      <a data-wysihtml-dialog-action="save">OK</a>&nbsp;<a data-wysihtml-dialog-action="cancel">Cancel</a>
                    </div>
                </div>

                <textarea class="editable form-control @error('sambutan') is-invalid @enderror" name="sambutan" value="{{ old('sambutan') }}" style="height: 500px;" placeholder="Masukan Teks"></textarea>
                @error('sambutan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <hr/>
        <h4>Data Sambutan Kepala Sekolah</h4>
        @foreach ($sambutan as $sbt)
            <p>
                {!! $sbt->teks !!}
                <a href="/headmasterswords/{{ $sbt->id }}/edit" class="btn btn-primary">
                    Edit
                </a>
                <button type="submit" data-id="{{ $sbt->id }}" class="btn btn-danger swal-confirm">
                    <form action="{{ route('delete_sambutan', $sbt->id) }}" id="delete{{ $sbt->id }}" method="POST">
                        @csrf
                        @method('delete')
                    </form>
                    Hapus
                </button>
            </p>
        @endforeach
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
