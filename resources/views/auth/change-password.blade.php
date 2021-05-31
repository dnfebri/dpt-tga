@extends('layout/template', ['title' => 'Change Password', 'nav' => 'Akun'])

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

   <!-- Content Header (Page header) -->
   <div class="content-header pt-4">
      <div class="container-fluid">

         <div class="row">
            <div class="col-md-8">
               <div class="card">
                  <div class="card-header bg-primary">
                     Ubah Password
                  </div>
                  <div class="card-body">
                     <form action="{{ route('user.store', ['id' => Auth::user()->id]) }}" method="post">
                        @csrf
                        <div class="mb-3 row">
                           <label for="inputPassword" class="col-sm-3 col-form-label">Password Lama</label>
                           <div class="col-sm-9">
                              <input type="password" class="form-control @error('old_password') is-invalid @enderror"
                                 id="inputPassword" name="old_password">
                              @error('old_password')
                              <span class="invalid-feedback" role="alert">
                                 <small>{{ $message }}</small>
                              </span>
                              @enderror
                           </div>
                        </div>
                        <div class="mb-3 row">
                           <label for="inputPassword" class="col-sm-3 col-form-label">Password Baru</label>
                           <div class="col-sm-9">
                              <input type="password" class="form-control @error('password') is-invalid @enderror"
                                 id="inputPassword" name="password">
                              @error('password')
                              <span class="invalid-feedback" role="alert">
                                 <small>{{ $message }}</small>
                              </span>
                              @enderror
                           </div>
                        </div>
                        <div class="mb-3 row">
                           <label for="inputPassword" class="col-sm-3 col-form-label">Password Confirm</label>
                           <div class="col-sm-9">
                              <input type="password" class="form-control" id="inputPassword"
                                 name="password_confirmation">
                              @error('password_confirmation')
                              <span class="invalid-feedback" role="alert">
                                 <small>{{ $message }}</small>
                              </span>
                              @enderror
                           </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  </form>
               </div>
            </div>
         </div>

      </div><!-- /.row -->
   </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
</div>
<!-- /.content-wrapper -->
@endsection