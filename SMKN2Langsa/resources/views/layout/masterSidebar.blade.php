<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{url('/dashboard')}}">SMK Negeri 2 Langsa</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{url('/dashboard')}}">SMKN2</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item dropdown">
            <a href="{{ url('/dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          <li class="menu-header">Data Sekolah</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Data Sekolah</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('data_kontak') }}">Kontak</a></li>
                <li><a class="nav-link" href="{{ route('history') }}">Sejarah</a></li>
                <li><a class="nav-link" href="{{ route('data_sambutan') }}">Sambutan Kepsek</a></li>
                <li><a class="nav-link" href="{{ route('data_visi') }}">Visi</a></li>
                <li><a class="nav-link" href="{{ route('data_misi') }}">Misi</a></li>
                <li><a class="nav-link" href="{{ route('data_teachers') }}">Data Guru</a></li>
                <li><a class="nav-link" href="{{ route('data_gallery') }}">Galery</a></li>
                <li><a class="nav-link" href="{{ route('data_jurusan') }}">Jurusan</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Berita</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('data_berita') }}">Berita</a></li>
              <li><a class="nav-link" href="{{ route('data_prestasi') }}">Prestasi</a></li>
            </ul>
          </li>
          {{-- <li class="nav-item dropdown">
            <a href="{{ route('data_jurusan') }}" class="nav-link"><i class="fas fa-columns"></i> <span>Jurusan</span></a>
          </li> --}}
          {{-- <li class="nav-item dropdown"><a class="nav-link" href="{{ route('data_user') }}"><i class="far fa-square"></i> <span>Data User</span></a></li> --}}
        </ul>

        {{-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
          </a>
        </div> --}}
    </aside>
  </div>
