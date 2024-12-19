@extends('layout/all')

@section('title', 'Pendidik SMKN 2 Langsa')

@section('container')

<div class="isi pb-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 list-menu pt-2 pb-2 pl-2 pr-2 bg-light mb-3">
                <a href="{{ url('/') }}">Home </a>/
                <a href="{{ url('tenagaPendidik') }}">Pendidik SMKN 2 Langsa</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="row">
                    <img src="" class="img-fluid mb-5" alt="">
                    <h1>Pendidik SMKN 2 Langsa</h1>
                    <hr>
                </div>
                <div class="row mb-5 mt-5">
                    @foreach ($teacher as $tch)
                    <div class="col-sm-12 col-md-2 mb-3">
                        <div class="card" style="width: 100%;">
                            <center>
                              <img src="/image/user.png" class="card-img-top" alt="...">
                            </center>
                            <div class="card-body" style="font-size: 10pt;">
                              <h5 class="card-title" style="font-size: 10pt;">{{$tch->nama}}</h5>
                              <p class="card-text">{{$tch->bidang}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

