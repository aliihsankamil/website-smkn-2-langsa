@extends('layout/all')

@section('title', 'Audio Video')

@section('container')

<div class="isi">
    <div class="container">
        <div class="row">
            <div class="col-md-12 list-menu p-2 bg-light mb-5">
                <a href="{{ url('/') }}">Home </a>/
                <a href="{{ url('jurusanAV') }}"> Jurusan Teknik Audio Video</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="" alt="AudioVideo" class="img-fluid mb-3">
                <h1>Teknik Audio Video</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus omnis optio explicabo nobis, hic sunt illum eius, natus non praesentium repellat consequuntur quisquam laboriosam, id aut consectetur dolores doloribus aperiam.
                </p>
            </div>
        </div>
    </div>
</div>
    
@endsection