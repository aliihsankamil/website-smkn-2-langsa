@extends('layout/master')

@section('title', 'Tambah Data Prestasi')
@section('judul', 'Tambah Data Prestasi')

@section('container')

    <div class="section-body p-4 bg-white">
        <form action="{{ route('tambah_data_prestasi') }}" method="post" enctype="multipart/form-data" class="ewrapper">
            @csrf
            <div class="form-group">
                <label>Judul Prestasi</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" placeholder="Masukan judul prestasi">
                @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Foto Prestasi</label>
                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}">
                @error('foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Lokasi | contoh:SMKN 2 Langsa, Prov. Aceh</label>
                <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" value="{{ old('lokasi') }}" placeholder="Masukan Lokasi">
                @error('lokasi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}">
                @error('tanggal')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="desc">Teks Prestasi</label>
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
                      <div class="form-group">
                        <textarea name="teks" class="editable form-control @error('teks') is-invalid @enderror" value="{{ old('teks') }}" style="height: 500px;" placeholder="Masukkan teks prestasi">{{ old('teks') }}</textarea>
                        @error('teks')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    <div class="form-group">
                        <label>Teks prestasi singkat | contoh:SMK Negeri 2 Langsa mendapatkan </label>
                        <input type="text" class="form-control @error('teks_singkat') is-invalid @enderror" name="teks_singkat" value="{{ old('teks_singkat') }}" placeholder="Masukan Teks Prestasi Singkat">
                        @error('teks_singkat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('data_prestasi') }}" class="btn btn-danger">Kembali</a>
        </form>
    </div>

@endsection

@push('page-scripts')

<script src="{{ asset('../assets/wysihtml-0.6.0-beta/dist/wysihtml.js')}}"></script>
<script src="{{ asset('../assets/wysihtml-0.6.0-beta/dist/wysihtml.all-commands.js')}}"></script>
<script src="{{ asset('../assets/wysihtml-0.6.0-beta/dist/wysihtml.table_editing.js')}}"></script>
<script src="{{ asset('../assets/wysihtml-0.6.0-beta/dist/wysihtml.toolbar.js')}}"></script>

<script src="{{ asset('../assets/wysihtml-0.6.0-beta/parser_rules/advanced_unwrap.js')}}"></script>

@endpush

@push('after-scripts')
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
