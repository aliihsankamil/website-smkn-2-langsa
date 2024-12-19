@extends('layout/all')

@section('title', 'Galleries')

@section('container')

<div class="isi">
    <div class="container pb-5">
        <div class="row">
            <div class="col-sm-12 col-md-12 list-menu pt-2 pb-2 pl-2 pr-2 bg-light mb-3">
                <a href="{{ url('/') }}">Home </a>/
                <a href="{{ url('galery') }}"> Galleries</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h1>Galleries</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            @foreach ($galleries as $glr)
            <div class="col-sm-12 col-md-3 mt-3">
                <img src="/image/{{ $glr->foto }}" class="img-fluid" alt="">
                <p class="card-text mt-1" style="font-size: 10pt;">{{ $glr->deskripsi }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

