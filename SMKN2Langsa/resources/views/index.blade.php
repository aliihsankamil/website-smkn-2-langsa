@extends('layout/main')

@section('title', 'SMK Negeri 2 Langsa')

@section('container')

  {{-- jumbotron --}}

  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-7 text-left">
            @foreach ($datasmk as $judul)
                <h1 class="mt-5">{{ $judul->nama_sekolah }}</h1>
            @endforeach
                <p>
                    Sekolah Menengah Kejuruan (SMK) Negeri 2 Langsa merupakan salah satu sekolah tertua di Aceh, dengan tingkat kedisiplinan yang baik agar menamatkan peserta didik yang berkualitas sehingga dapat bersaing di dunia kerja/industri.
                </p>
            <a href="{{ url('sejarah') }}" class="btn btn-outline-success btn-light" style="font-size: 13pt;">
            <b>Selengkapnya</b> <i class="fas fa-arrow-circle-right ml-2"></i>
          </a>
        </div>
        <div class="col-md-2"></div>
        <div class="col-sm-12 col-md-3">
          <img src="/image/logo.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </div>

  {{-- akhir jumbotron --}}



  {{-- berita terbaru --}}

  <div class="berita-terbaru" id="beritaTerbaru">
    <div class="container pt-5 pb-5">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">Berita</h2>
          <hr class="hr-top">
        </div>
      </div>

      <div class="row">
            @foreach ($berita as $brt)
            <div class="col-sm-6 col-md-4 mt-2 mb-3">
                <div class="card" style="width: 100%;">
                <img src="/image/berita/{{ $brt->foto }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$brt->judul}}</h5>
                    <p class="card-text">{{ $brt->teks_singkat }}...</p>
                    <a href="/beritaall/{{ $brt->id }}" class="text-dark">Read more >></a>
                    <hr class="hr-content">
                    <p class="card-text">
                        <small class="text-muted">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg> ADMIN |
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            </svg>
                            {{$brt->tanggal}}
                        </small>
                    </p>
                </div>
                </div>
            </div>
            @endforeach
      </div>
      <div class="row text-center">
        <div class="col-sm-12 pt-5">
        <a href="{{ url('beritaTerbaru') }}" class="btn btn-outline-success">TAMPILKAN SEMUA BERITA</a>
        </div>
      </div>
    </div>
  </div>

  {{-- Akhir berita terbaru --}}



  {{-- ekstrakurikuler --}}

  <div class="ekstrakurikuler" id="ekstraKurikuler">

    <div class="container pt-5 pb-5">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">Ekstrakurikuler</h2>
          <hr class="hr-top">
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4 mt-3">
          <a href="">
            <img src="/image/plh.png" class="img-thumbnail" alt="">
          </a>
        </div>
        <div class="col-sm-4 mt-3">
          <a href="">
            <img src="/image/pmr.png" class="img-thumbnail" alt="">
          </a>
        </div>
        <div class="col-sm-4 mt-3">
          <a href="">
            <img src="/image/paskib.png" class="img-thumbnail" alt="">
          </a>
        </div>
        <div class="col-sm-4 mt-3">
          <a href="">
            <img src="/image/pramuka.png" class="img-thumbnail" alt="">
          </a>
        </div>
      </div>
    </div>

  </div>

  {{-- akhir ekstrakurikuler --}}


  {{-- prestasi --}}

  <div class="prestasi" id="prestasi">
    <div class="container pt-5 pb-5">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2>Prestasi</h2>
          <hr class="hr-top">
        </div>
      </div>

      <div class="row">
          @foreach ($prestasi as $prst)
          <div class="col-sm-12 mt-3">
            <div class="card mb-3" style="max-width: 100%;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="/image/berita/{{ $prst->foto }}" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">
                        <a class="text-success" href="/beritaall/{{ $prst->id }}">{{ $prst->judul }}</a>
                    </h5>
                    <p class="card-text"><small class="text-muted">
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                      </svg>
                      {{ $prst->tanggal }}
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-map" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98l4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z"/>
                      </svg>
                      {{ $prst->lokasi }}
                    </small></p>
                    <p class="card-text">{{ $prst->teks_singkat }}.....</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
      </div>

      <div class="row text-center">
        <div class="col-sm-12 pt-5">
          <a href="{{ url('prestasii') }}" class="btn btn-outline-success">TAMPILKAN SEMUA PRESTASI</a>
        </div>
      </div>
    </div>
  </div>

  {{-- akhir prestasi --}}


  {{-- info --}}

  <div class="angka-informasi">
    <div class="container pt-5 pb-5">
      <div class="row">
        <div class="col-sm-4 mb-2">
          <div class="card" style="max-width: 100%;">
            <div class="card-body text-light text-center">
              <p class="text-warning">
                <svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-award-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                </svg>
              </p>
              <h5 class="card-title">127</h5>
              <p class="card-text">PRESTASI<br>TINGKAT KABUPATEN</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="card" style="max-width: 100%;">
            <div class="card-body text-light text-center">
              <p class="text-warning">
                <svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-award-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                </svg>
              </p>
              <h5 class="card-title">89</h5>
              <p class="card-text"><P>PRESTASI<br>TINGKAT PROVINSI</P></p>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-2">
          <div class="card" style="max-width: 100%;">
            <div class="card-body text-light text-center">
              <p class="text-warning">
                <svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-award-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                </svg>
              </p>
              <h5 class="card-title">12</h5>
              <p class="card-text"><P>PRESTASI<br>TINGKAT NASIONAL</P></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- akhir info --}}



  {{-- pendidik --}}

  <div class="pendidik" id="tenagaPendidik">
    <div class="container pt-5 pb-5 text-center">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">Tenaga Pendidik</h2>
          <hr class="hr-top">
        </div>
      </div>

      <div class="row mb-5 mt-5">
        <div class="col-sm-12">
          <div class="owl-carousel owl-theme">
            @foreach ($teacher as $tch)
                <div class="item">
                    <div class="card" style="width: 100%;">
                        <center>
                            <img src="/image/guru/{{ $tch->foto }}" style=" width: auto; height:200px;" class="card-img-top" alt="...">
                        </center>
                        <div class="card-body">
                            <h5 class="card-title">{{$tch->nama}}</h5>
                            <p class="card-text">{{$tch->bidang}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
          </div>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-sm-12">
        <a href="{{ url('tenagaPendidik') }}" class="btn btn-outline-success">TAMPILKAN SEMUA GURU</a>
        </div>
      </div>
    </div>
  </div>

  {{-- akhir pendidik --}}



  {{-- kontak --}}

  <div class="kontak" id="kontak">
    <div class="container pt-5 pb-5">
      <div class="row mb-5">
        <div class="col-sm-12">
          <h2 class="text-center">Hubungi Kami</h2>
          <hr class="hr-top">
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h3 class="mb-4">Denah Lokasi</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6439.223105114717!2d97.95318468938758!3d4.4910655372377075!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30379b2f091977ed%3A0x65c4434ec2742f6!2sSMK%20Negeri%202%20Langsa!5e0!3m2!1sid!2sid!4v1606176355613!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-sm-12 col-md-6">
          <h3 class="mb-4">Kontak</h3>
          <table>
            <tr>
              <td style="padding: 0px 5px 0px 5px; border: 1px solid #999;">
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                </svg>
              </td>
              <td style="padding: 2px 5px 2px 5px;">Email <br>
                @foreach ($datasmk as $email)
                  {{$email->email}}
                @endforeach
              </td>
            </tr>
            <tr>
              <td><br></td>
            </tr>
            <tr>
              <td style="padding: 0px 5px 0px 5px; border: 1px solid #999;">
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-signpost-split-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7 16h2V6h5a1 1 0 0 0 .8-.4l.975-1.3a.5.5 0 0 0 0-.6L14.8 2.4A1 1 0 0 0 14 2H9v-.586a1 1 0 0 0-2 0V7H2a1 1 0 0 0-.8.4L.225 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4h5v5z"/>
                </svg>
              </td>
              <td style="padding: 2px 5px 2px 5px;">Address<br>
                @foreach ($datasmk as $email)
                  {{$email->alamat}}
                @endforeach
              </td>
            </tr>
            <tr>
              <td><br></td>
            </tr>
            <tr>
              <td style="padding: 0px 5px 0px 5px; border: 1px solid #999;">
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                </svg>
              </td>
              <td style="padding: 2px 5px 2px 5px;">Telp/Fax<br>
                @foreach ($datasmk as $email)
                  {{$email->telpfax}}
                @endforeach
              </td>
            </tr>
          </table>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-sm-12">
          <h3 class="mb-4">Kotak Saran</h3>
          <form action="">
            <div class="form-group">
              <input type="text" name="nama" class="form-control mb-3 pt-4 pb-4" placeholder="Nama *" required>
              <input type="email" name="email" class="form-control mb-3 pt-4 pb-4" placeholder="Email *" required>
              <input type="tel" name="nama" class="form-control mb-3 pt-4 pb-4" placeholder="Nomor Telepon" required>
              <textarea name="pesan" class="form-control mb-3 " placeholder="Pesan *" required></textarea>
              <button type="submit" class="btn btn-outline-success">
                Kirim Pesan
                <i class="fas fa-paper-plane ml-2" style="font-size: 20pt;"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  {{-- akhir kontak --}}


@endsection
