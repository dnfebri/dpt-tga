@extends('layout/template', ['title' => 'Import Pemilih'])

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Main content  ---------------------------------------------------------------------------------------------------------->
   <section class="content">
      <div class="container">

         <div class="row">
            <div class="col-md-10">
               <div class="card mt-4">
                  <form action="#" method="post">
                     <h5 class="card-header bg-gray-dark">Import Pemilih</h5>
                     <div class="card-body">
                        <div class="mb-3 row">
                           <label for="import" class="col-sm-2 col-form-label">Import Excel</label>
                           <div class="col-sm-10">
                              <input class="form-control" type="file" id="formFile">
                           </div>
                        </div>
                        <a href="{{ route('pemilih.example') }}" class="btn btn-primary">
                           Example Excel <i class="ml-2 fas fa-file-download"></i>
                        </a>
                     </div>
                     <div class="card-footer d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-success">Simpan <i class="ml-2 fas fa-save"></i></button>
                     </div>
                  </form>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col">
               <table class="table table-striped">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                     </tr>
                     <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                     </tr>
                     <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>

      </div><!-- /.container-fluid -->
   </section>
   <!-- /.content akhir -------------------------------------------------------------------------------------------------------->

</div>
<!-- /.content-wrapper -->
@endsection