@extends('layout/template', ['title' => 'Daftar Desa'])

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
               <h1 class="m-0">Daftar Desa</h1>
            </div><!-- /.col -->

         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->



   <!-- Main content  ---------------------------------------------------------------------------------------------------------->
   <section class="content">
      <div class="container">

         @if (session('massage'))
         <div id="massage" data-massage="{{ session('massage') }}"></div>
         @endif

         <div class="row">
            <div class="col-md-8">
               <div class="row">
                  <div class="col">
                     <a href="{{ url('/desa/create') }}" class="btn btn-primary"> Tambah Daftar Desa</a>
                  </div>
                  <div class="col-auto">
                     <h3>Jumlah desa : {{ count($desa) }}</h3>
                  </div>
               </div>

               {{-- @dump(count($desa)) --}}

               <table class="table table-striped table-hover mt-3">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Desa</th>
                        <th scope="col">Jumlah TPS</th>
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($desa as $d)
                     <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{$d->nama_desa}}</td>
                        <td>{{$d->jml_tps}}</td>
                        <td>
                           <a href="{{ route('desa.edit', ['desa' => $d->id]) }}" class="badge bg-primary">Ubah</a>
                           {{-- <a href="#" class="badge bg-danger">Hapus</a> --}}
                           <form action="{{ route('desa.delete', ['desa' => $d->id]) }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf
                              <button type="submit" class="btn badge bg-danger border-0"
                                 onclick="return confirm('Apakah anda yakin ?')">Hapus</button>
                           </form>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>

      </div><!-- /.container-fluid -->
   </section>
</div>
<!-- /.content akhir -------------------------------------------------------------------------------------------------------->
@endsection