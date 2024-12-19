@extends('layout/all')

@section('title', 'Info SMKN 2 Langsa')

@section('container')

<div class="isi pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-sm-12 col-md-10 list-menu pt-2 pb-2 pl-2 pr-2 bg-light mb-3">
                <a href="{{ url('/') }}">Home </a>/
                <a href="{{ url('infoSekolah') }}">Info Sekolah</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-sm-12 col-md-10">
                    <img src="/image/hero-banner.jpg" class="img-fluid mb-5" alt="SMKN2LANGSA">
                    <h1>Info Sekolah</h1>
                    <table class="table table-striped">
                        @foreach ($infoSekolah as $info)
                            <tr>
                                <td>Nama Sekolah</td>
                                <td>:</td>
                                <td>{{ $info->nama_sekolah }}</td>
                            </tr>
                            <tr>
                                <td>NPSN</td>
                                <td>:</td>
                                <td>{{ $info->npsn }}</td>
                            </tr>
                            <tr>
                                <td>Kepala Sekolah</td>
                                <td>:</td>
                                <td>{{ $info->nama_kepsek }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $info->alamat }}</td>
                            </tr>
                            <tr>
                                <td>Telp/Fax</td>
                                <td>:</td>
                                <td>{{ $info->telpfax }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $info->email }}</td>
                            </tr>
                        @endforeach
                    </table>
            </div>
        </div>
    </div>
</div>

@endsection

