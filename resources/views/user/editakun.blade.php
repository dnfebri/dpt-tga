@extends('layout/template', ['title' => 'Edit Akun', 'nav' => 'Akun'])

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Edit Akun</h1>
            </div><!-- /.col -->

         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->



   <!-- Main content  ---------------------------------------------------------------------------------------------------------->
   <section class="content">
      <div class="container">

         <div class="row mt-3">
            <div class="col-lg-8">

               @if ($errors->any())
               <div class="alert alert-danger">
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
               @endif

               <form action="{{ route('user.updateakun') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3 row">
                     <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->name }}">
                     </div>
                  </div>
                  <div class="mb-3 row">
                     <label for="username" class="col-sm-2 col-form-label">Username</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username"
                           value="{{ Auth::user()->username }}">
                     </div>
                  </div>
                  <div class="mb-3 row">
                     <label for="email" class="col-sm-2 col-form-label">Email</label>
                     <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email"
                           value="{{ Auth::user()->email }}">
                     </div>
                  </div>
                  <div class="mb-3 row">
                     <label for="image" class="col-sm-2 col-form-label">Email</label>
                     <div class="col-sm-2">
                        <img src="{{ url('img/profile', Auth::user()->image) }}" class="img-thumbnail img-previuw">
                     </div>
                     <div class="col-sm-8">
                        <input class="form-control" id="image" name="image" value="" type="file" name="image"
                           onchange="priviewImg()">
                        <div id="validationServer05Feedback" class="invalid-feedback">

                        </div>
                        <div class="img-label">
                           {{ Auth::user()->image }}
                        </div>
                     </div>
                  </div>

                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                     Submit
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                     <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="staticBackdropLabel">Confirmasi Password</h5>
                              {{-- <button type="button" class="btn-close" data-bs-dismiss="modal"
                                 aria-label="Close"></button> --}}
                           </div>
                           <div class="modal-body">
                              <div class="mb-3">
                                 <label for="password" class="form-label">Confirm password</label>
                                 <input type="password" class="form-control" id="password" name="password" autofocus>
                              </div>
                           </div>
                           <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                           </div>
                        </div>
                     </div>
                  </div>

               </form>
            </div>
         </div>

      </div><!-- /.container-fluid -->
   </section>
   <!-- /.content akhir -------------------------------------------------------------------------------------------------------->

</div>
<!-- /.content-wrapper -->
@endsection