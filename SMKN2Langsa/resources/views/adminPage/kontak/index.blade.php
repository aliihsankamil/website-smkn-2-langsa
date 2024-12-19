@extends('layout/master')

@section('title', 'Kontak')
@section('judul', 'Data Sekolah')

@section('container')

    <div class="section-body">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Data Sekolah</h4>
              </div>
              <div class="card-body p-0">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        {{ session('status') }}
                        </div>
                    </div>
                @endif
                <div class="table-responsive">
                  <table class="table table-striped table-md">
                    @foreach ($kontak as $kt)
                    <tr>
                      <th>NPSN</th>
                      <td>{{$kt->npsn}}</td>
                    </tr>
                    <tr>
                      <th>Nama Sekolah</th>
                      <td>{{$kt->nama_sekolah}}</td>
                    </tr>
                    <tr>
                      <th>Kepala Sekolah</th>
                      <td>{{$kt->nama_kepsek}}</td>
                    </tr>
                    <tr>
                      <th>Status</th>
                      <td><div class="badge badge-success">Active</div></td>
                    </tr>
                    <tr>
                      <th>Alamat</th>
                      <td>{{$kt->alamat}}</td>
                    </tr>
                    <tr>
                      <th>Email</th>
                      <td>{{$kt->email}}</td>
                    </tr>
                    <tr>
                      <th>Telp/Fax</th>
                      <td>{{$kt->telpfax}}</td>
                    </tr>
                    <tr>
                      <th>Instagram</th>
                      <td>{{$kt->instagram}}</td>
                    </tr>
                    <tr>
                      <th>Facebook</th>
                      <td>{{$kt->facebook}}</td>
                    </tr>
                    <tr>
                      <th>Twitter</th>
                      <td>{{$kt->twitter}}</td>
                    </tr>
                    <tr>
                      <th>Youtube</th>
                      <td>{{$kt->youtube}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <a href="{{ route('edit_kontak',$kt->id) }}" class="btn btn-primary">
                                Edit
                            </a>
                        </td>
                    </tr>
                    @endforeach
                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>

@endsection
