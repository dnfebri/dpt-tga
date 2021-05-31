@extends('layout/template', ['title' => 'Daftar Pemilih', 'nav' => 'Daftar Pemilih' , 'livewire' => TRUE])

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->

   @livewire('pemilih.index')

   {{-- <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-md-3 bg-danger">
               <h1 class="m-0">Daftar Pemilih</h1>
            </div>
            <div class="col-md-2">
               <select class="form-select" aria-label="Default select example">
                  <option selected>Pilih</option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
               </select>
            </div>

         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->



   <!-- Main content  ---------------------------------------------------------------------------------------------------------->
   <section class="content">
      <div class="container-fluid">

         <div class="row">
            <div class="col-md-12">
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">TGL Lahir</th>
                        <th scope="col">Jenis <br>Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">KD_Desa</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($pemilih as $row)
                     <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
   <td>{{ $row->nama }}</td>
   <td>{{ $row->tgl_lahir }}</td>
   <td>{{ $row->jenis_kelamin }}</td>
   <td>{{ $row->alamat }}</td>
   <td>{{ $row->kd_desa }}</td>
   </tr>
   @endforeach
   </tbody>
   </table>
</div>
</div>

</div><!-- /.container-fluid -->
</section> --}}
<!-- /.content akhir -------------------------------------------------------------------------------------------------------->

</div>
<!-- /.content-wrapper -->
@endsection