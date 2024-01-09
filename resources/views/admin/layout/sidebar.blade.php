      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="{{url('/dashboard')}}"><img src="{{ asset('admin/assets/images/logo.svg') }}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="{{ asset('admin/assets/images/logo-mini.svg') }}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="{{ asset('admin/assets/images/faces/face1.jpg')}}" alt="profile" />
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mb-2"></span>
                <span class="font-weight-normal"></span>
              </div>
              <span class="badge badge-danger text-white ml-3 rounded">3</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/dashboard')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/lokasi')}}">
              <i class="mdi mdi-map-marker-multiple menu-icon"></i>
              <span class="menu-title">Lokasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/jadwal')}}">
              <i class="mdi mdi-book-open-page-variant menu-icon"></i>
              <span class="menu-title"> Jadwal</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/berita')}}">
              <i class="mdi mdi-library menu-icon"></i>
              <span class="menu-title">Berita</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="main-panel">