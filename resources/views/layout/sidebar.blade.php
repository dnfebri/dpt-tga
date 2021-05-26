<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="index.html" class="brand-link mb-2">
      <img src="{{ url('img/logo_kpu.png') }}" alt="AdminLTE Logo" class="brand-image">
      <span class="brand-text font-weight-light">
         PPK Tanggulangin
      </span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-header">ADMINISTRATOR</li>

            <li class="nav-item">
               <a href="{{ url('/') }}" class="nav-link active">
                  <i class="nav-icon fas fa-fw fa-tachometer-alt"></i>
                  <p>
                     Dashboard
                  </p>
               </a>
            </li>
            {{-- <li class="nav-item">
               <a href="users.html" class="nav-link">
                  <i class="nav-icon fas fa-fw fa-users"></i>
                  <p>Managemen User</p>
               </a>
            </li> --}}

            <li class="nav-header">DTP</li>

            <li class="nav-item">
               <a href="{{ route('pemilih.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-fw fa-list-alt"></i>
                  <p>Daftar Pemilih</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{ route('pemilih.import') }}" class="nav-link">
                  <i class="nav-icon fas fa-fw fa-file-import"></i>
                  <p>Import DPT</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{ route('desa.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-fw fa-clipboard-list"></i>
                  <p>Desa</p>
               </a>
            </li>

            <li class="nav-header">USER</li>

            <li class="nav-item">
               <a href="akun.html" class="nav-link">
                  <i class="nav-icon fas fa-fw fa-user"></i>
                  <p>Akun</p>
               </a>
            </li>

            {{-- <li class="nav-header">ARSIP</li>
            <li class="nav-item">
               <a href="data-arsip.html" class="nav-link">
                  <i class="nav-icon fa-fw fas fa-book"></i>
                  <p>Data arsip</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="catatan.html" class="nav-link">
                  <i class="nav-icon fa-fw fas fa-edit"></i>
                  <p>Catatan</p>
               </a>
            </li> --}}

      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>