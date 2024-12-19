@extends('layout/all')

@section('title', 'Jurusan')

@section('container')

<div class="isi">
    <div class="container" style="min-height: 1000px;">
        <div class="row">
            <div class="col-md-12 list-menu p-2 bg-light mb-5">
                <a href="{{ url('/') }}">Home </a>/
                <a href="">{{$jurusan->nama_jurusan}}</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>{{$jurusan->nama_jurusan}}</h1>
                <hr>
                <img src="/image/{{$jurusan->foto}}" alt="image" class="img-fluid mb-3">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-sm-12">
                <p>
                    {!!$jurusan->teks!!}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
