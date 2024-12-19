@extends('layout/master')

@section('title', 'Dashboard')
@section('judul', 'Dashboard')

@section('container')

    <div class="section-body bg-white p-4">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Jumlah Guru</h4>
                    </div>
                    <div class="card-body">
                      10
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-info">
                    <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah Jurusan</h4>
                    </div>
                    <div class="card-body">
                        42
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>Jumlah Gallery</h4>
                    </div>
                    <div class="card-body">
                        1,201
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Jumlah Prestasi</h4>
                        </div>
                        <div class="card-body">
                        1,201
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Jumlah Berita</h4>
                        </div>
                        <div class="card-body">
                        1,201
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
