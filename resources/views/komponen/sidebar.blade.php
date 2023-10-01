<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      {{-- <img src="{{ asset('adminLTE') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      {{-- <span class="brand-text font-weight-light"><b style="margin-left:3em">STEMPERT</b></span> --}}
      <img src="{{ asset('logo.png') }}" style="width: 100px; margin-left:50px" alt="">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image">
          <img src="{{asset('logo.png')}}" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info">
          <a href="#" class="d-block">Selamat Datang <b>{{ auth()->user()->name }}</b></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
              <i class="fa-solid fa-house fa-lg" style="margin-left: 0.3em"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('pegawai.index') }}" class="nav-link {{ request()->is('dashboard/pegawai') ? 'active' : '' }}">
              <i class="fa-solid fa-user fa-lg" style="margin-left: 0.3em"></i>
              <p>
                Pegawai
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('sppd.index') }}" class="nav-link {{ request()->is('dashboard/sppd') ? 'active' : '' }}">
              <i class="fa-solid fa-file fa-lg" style="margin-left: 0.3em"></i>
              <p>
                SPPD
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://www.ilovepdf.com/pdf_to_word" target="_blank" class="nav-link">
              <i class="fa-solid fa-file fa-lg" style="margin-left: 0.3em"></i>
              <p>
                 PDF to WORD
                
              </p>
            </a>
          </li>
        
      
      
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>