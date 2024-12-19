@extends('layout/all')

@section('title', 'Sambutan Ka Sekolah')

@section('container')
<div class="isi pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-sm-12 col-md-9 list-menu pt-2 pb-2 pl-2 pr-2 bg-light mb-3">
                <a href="{{ url('/') }}">Home </a>/
                <a href="{{ url('sambutanKepsek') }}"> Sambutan Kepala Sekolah</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-sm-12 col-md-9">
                <img src="/image/hero-banner.jpg" class="img-fluid mb-5" alt="SMKN2LANGSA">
                <h1>Sambutan Kepsek</h1>
                <hr/>
                @foreach ($sambutan as $sbt)
                    <p>{!! $sbt->teks !!}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection

