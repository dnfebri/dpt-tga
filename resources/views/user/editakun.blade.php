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
      <div class="container-fluid">

         @dump($user)
         <div class="row mt-3">
            <div class="col-lg-10">
               <form>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
          </div>

      </div><!-- /.container-fluid -->
   </section>
   <!-- /.content akhir -------------------------------------------------------------------------------------------------------->

</div>
<!-- /.content-wrapper -->
@endsection