@extends('layout/template', ['title' => 'Import Pemilih', 'nav' => 'Import DPT' , 'livewire' => TRUE])

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Main content  ---------------------------------------------------------------------------------------------------------->
   <section class="content">
      <div class="container">

         @livewire('pemilih.import')

      </div><!-- /.container-fluid -->
   </section>
   <!-- /.content akhir -------------------------------------------------------------------------------------------------------->

</div>
<!-- /.content-wrapper -->
@endsection