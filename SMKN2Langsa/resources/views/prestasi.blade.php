@extends('layout/all')

@section('title', 'Berita Prestasi')

@section('container')

<div class="isi pb-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 list-menu pt-2 pb-2 pl-2 pr-2 bg-light mb-3">
                <a href="{{ url('/') }}">Home </a>/
                <a href="{{ url('prestasii') }}"> Berita Prestasi</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h1>Berita Prestasi</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            @foreach ($prestasi as $brt)
            <div class="col-sm-12 col-md-12 mt-3">
                <div class="card mb-3" style="max-width: 100%;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="/image/berita/{{$brt->foto}}" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">
                            <a class="text-success" href="/beritaall/{{ $brt->id }}">{{ $brt->judul }}</a>
                        </h5>
                        <p class="card-text"><small class="text-muted">
                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                          </svg>
                          {{ $brt->tanggal }}
                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-map" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98l4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z"/>
                          </svg>
                          {{ $brt->lokasi }}
                        </small></p>
                        <p class="card-text">{{ $brt->teks_singkat }}.........</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

