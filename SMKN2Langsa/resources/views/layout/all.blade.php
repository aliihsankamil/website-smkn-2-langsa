<!doctype html>
<html lang="en" id="home">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.theme.default.css">
    <link rel="stylesheet" href="/font/css/all.css">

    <title>@yield('title')</title>
  </head>
  <body>


    {{-- Navbar --}}

    <nav class="navbar fixed-top navbar-expand-lg navbar-light nav-change-color">
      <div class="container">
      <a class="navbar-brand page-scroll" href="{{ url('#home') }}">
          <img src="/image/icon.png" height="50" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Profile Sekolah
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('s_kepsek') }}">Sambutan Kepala Sekolah</a>
                <a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah</a>
                <a class="dropdown-item" href="{{ route('visi_misi') }}">Visi & Misi</a>
                <a class="dropdown-item page-scroll" href="{{ url('/#tenagaPendidik') }}">Tenaga Pendidik</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Berita
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item page-scroll" href="{{ url('/#beritaTerbaru') }}">Berita Terbaru</a>
                <a class="dropdown-item" href="{{ url('infoSekolah') }}">Info Sekolah</a>
                <a class="dropdown-item" href="{{ route('galery') }}">Galery</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Jurusan
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                {{-- <a class="dropdown-item" href="{{ url('jurusanBKP') }}">Bisnis Konstruksi dan Properti</a>
                <a class="dropdown-item" href="{{ url('jurusanDPIB') }}">Teknik Desain Permodelan dan Informasi Bangunan</a>
                <a class="dropdown-item" href="{{ url('jurusanAV') }}">Teknik Audio Video</a>
                <a class="dropdown-item" href="{{ url('jurusanELIN') }}">Teknik Elektronika Industri</a>
                <a class="dropdown-item" href="{{ url('jurusanTL') }}">Teknik Instalasi Tenaga Listrik</a>
                <a class="dropdown-item" href="{{ url('jurusanTPTU') }}">Teknik Pendingin dan Tata Udara</a>
                <a class="dropdown-item" href="{{ url('jurusanMP') }}">Teknik Pemesinan</a>
                <a class="dropdown-item" href="{{ url('jurusanLAS') }}">Teknik Pengelasan</a>
                <a class="dropdown-item" href="{{ url('jurusanTKR') }}">Teknik Kendaraan Ringan</a>
                <a class="dropdown-item" href="{{ url('jurusanTBSM') }}">Teknik dan Bisnis Sepeda Motor</a>
                <a class="dropdown-item" href="{{ url('jurusanTKJ') }}">Teknik Komputer dan Jaringan</a>
                <a class="dropdown-item" href="{{ url('jurusanRPL') }}">Rekayasa Perangkat Lunak</a> --}}
                @foreach ($jurusann as $jrs)
                    <a class="dropdown-item" href="/jurusanall/{{ $jrs->id }}">{{ $jrs->nama_jurusan }}</a>
                @endforeach
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link page-scroll" href="{{ url('/#ekstraKurikuler') }}">Ekstrakurikuler</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="{{ url('/#prestasi') }}">Prestasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll" href="{{ url('/#kontak') }}">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    {{-- akhir navbar --}}


    <br><br><br><br><br>
    @yield('container')


      {{-- footer --}}

  <div class="footer">
    <div class="container text-light pt-5">
      <div class="row">

        {{-- footer kiri --}}
        <div class="col-md-4 col-sm-12 mb-3">
          <img src="/image/icon.png" alt="Logo Sekolah" width="250px">
          <p class="mt-4">
            Sekolah ini didirikan pada tahun 1971 sebelumnya masih berstatus dibawah yayasan pemerintah Kabupaten Aceh Timur yang dipimpin oleh kepala sekolah Bapak Idris, kemudian status sekolah tersebut pada tahun 1975 berubah status menjadi sekolah Teknologi Menengah Filial Banda Aceh dibawah pimpinan Bapak Machran Rangkuti. BEC, di tahun 1976 status Filial ditingkatkan menjadi STM Negeri Langsa yang berlokasi di Jln. Ade Irma suryani hingga tahun 1978.
          </p>
          <hr class="hr-footer">
          <a href="" class="text-focus"><i class="fab fa-facebook mr-3" style="font-size: 20pt;"></i></a>
          <a href="" class="text-danger"><i class="fab fa-instagram mr-3" style="font-size: 20pt;"></i></a>
          <a href="" class="text-primary"><i class="fab fa-twitter mr-3" style="font-size: 20pt;"></i></a>
          <a href="" class="text-danger"><i class="fab fa-youtube" style="font-size: 20pt;"></i></a>
        </div>
        {{-- akhir footer kiri --}}

        {{-- footer tengah --}}
        <div class="col-md-4 col-sm-6">
            <h4>Berita</h4><br>
            @foreach ($berita2 as $b)
            <div class="card" style="max-width: 100%;">
                <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="/image/berita/{{$b->foto}}" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body pt-0">
                    <p class="card-text"><b class="text-warning">{{$b->judul}}</b> <br>
                        <small class="text-muted">{{$b->tanggal}}</small> <br>
                        {{$b->teks_singkat}}</p>
                    </div>
                </div>
                </div>
            </div><br>
            @endforeach
        </div>
        {{-- akhir footer tengah --}}

        {{-- footer kanan --}}
        <div class="col-md-4 col-sm-6">
            <h4>Gallery</h4><br>
            @foreach ($gallery2 as $g)
            <div class="card" style="max-width: 100%;">
                <div class="row no-gutters">
                <div class="col-md-12">
                    <img src="/image/{{$g->foto}}" class="card-img" alt="...">
                    <p>{{$g->deskripsi}}</p>
                </div>
                </div>
            </div>
            @endforeach
        </div>
        {{-- akhir footer kanan --}}

      </div>

      {{-- footer bawah --}}
      <div class="row footer-c text-center mt-5">
        <div class="col-sm-12 mt-4 mb-4">
            &copy Copyright 2020 | Built with by <b class="text-warning">SMKNegeri2Langsa</b>
        </div>
      </div>
      {{-- akhir footer bawah --}}

    </div>
  </div>

  {{-- akhir footer --}}


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/owl.carousel.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
