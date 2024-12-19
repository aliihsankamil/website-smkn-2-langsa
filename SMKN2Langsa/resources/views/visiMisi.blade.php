@extends('layout/all')

@section('title', 'Visi & Misi')

@section('container')

<div class="isi pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-sm-12 col-md-9 list-menu pt-2 pb-2 pl-2 pr-2 bg-light mb-3">
                <a href="{{ url('/') }}">Home </a>/
                <a href="{{ url('visiMisi') }}"> Visi & Misi</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-sm-12 col-md-9">
                <img src="/image/hero-banner.jpg" class="img-fluid mb-5" alt="SMKN2LANGSA">
                <h1>Visi & Misi SMKN 2 Langsa</h1>
                <hr>
                <h4>Visi</h4>
                @foreach ($visi as $vs)
                    <p>
                        {!!$vs->teks!!}
                    </p>
                @endforeach
                <h4>Misi</h4>
                <p>
                    @foreach ($misi as $ms)
                        {!!$ms->teks!!}
                    @endforeach
                </p>
            </div>
        </div>
    </div>
</div>

@endsection

