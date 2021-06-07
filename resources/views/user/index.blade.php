@extends('layout/template', ['title' => 'User Akun', 'nav' => 'Akun'])

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-2">
               <h1 class="m-0">Akun Saya</h1>
            </div>
            <div class="col-auto">
               <form action="{{ route('user.editakun', ['user'=>Auth::user()->id]) }}" method="get">
                  <button type="submit" class="btn btn-warning">Edit Akun</button>
               </form>
            </div>
            <!-- /.col -->

         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
   {{-- @dump(Auth::user()) --}}

   <!-- Main content  ---------------------------------------------------------------------------------------------------------->
   <section class="content">
      <div class="container">

         @if (session('massage'))
         <div id="massage" data-massage="{{ session('massage') }}"></div>
         @endif

         <div class="row">
            <div class="col-md-8">
               <div class="card mb-3">
                  <div class="row g-0">
                     <div class="col-md-4">
                        <img src="{{ url('img/profile', Auth::user()->image) }}" alt="{{ Auth::user()->name }}"
                           style="width: 100%">
                     </div>
                     <div class="col-md-8 position-relative">
                        <div class="card-body">
                           <div class="mb-0 row">
                              <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                              <div class="col-sm-10">
                                 <p class="form-control-plaintext">{{ Auth::user()->name }}</p>
                              </div>
                           </div>
                           <div class="mb-0 row">
                              <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-10">
                                 <p class="form-control-plaintext">{{ Auth::user()->email }}</p>
                              </div>
                           </div>
                        </div>

                        <div class="card-footer bg-transparent border-0 position-absolute bottom-0 start-0">
                           <p class="card-text"><small class="text-muted">Created
                                 {{ Auth::user()->created_at->diffForHumans() }}</small>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col">
               <a href="{{ route('user.change') }}" class="btn btn-primary">Ubah Password</a>
            </div>
         </div>

      </div><!-- /.container -->
   </section>
   <!-- /.content akhir -------------------------------------------------------------------------------------------------------->

</div>
<!-- /.content-wrapper -->
@endsection