@extends('layout/template', ['title' => 'Edit Desa'])

@section('content')

{{-- @foreach($desa as $d)
@dump($d->nama_desa)
@endforeach --}}

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Edit Desa</h1>
            </div><!-- /.col -->

         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->



   <!-- Main content  ---------------------------------------------------------------------------------------------------------->
   <section class="content">
      <div class="container">
         <div class="row">
            <div class="col-md-8">

               <form action="{{ route('desa.update', ['desa' => $desa->id  ]) }}" method="post">
                  @csrf
                  @method('put')
                  <div class="mb-3 row">
                     <label for="nama_desa" class="col-sm-2 col-form-label">Nama Desa</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control @error('nama_desa') is-invalid @enderror" id="nama_desa"
                           name="nama_desa" value="{{ old('nama_desa') ?? $desa->nama_desa }}" placeholder="Nama Desa">
                        @error('nama_desa')
                        <div id="nama_desa" class="invalid-feedback">
                           {{ $message }}
                        </div>
                        @enderror
                     </div>
                  </div>
                  <div class="mb-3 row">
                     <label for="jml_tps" class="col-sm-2 col-form-label">Jumlah TPS</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control @error('jml_tps') is-invalid @enderror" id="jml_tps"
                           name="jml_tps" value="{{ old('jml_tps') ?? $desa->jml_tps }}" placeholder="Jumalah TPS">
                        @error('jml_tps')
                        <div id="jml_tps" class="invalid-feedback">
                           {{ $message }}
                        </div>
                        @enderror
                     </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Ubah</button>
               </form>

            </div>
         </div>
      </div><!-- /.container-fluid -->
   </section>
</div>
<!-- /.content akhir -------------------------------------------------------------------------------------------------------->
@endsection