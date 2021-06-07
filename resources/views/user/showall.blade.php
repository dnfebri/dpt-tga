@extends('layout/template', ['title' => 'Daftar User', 'nav' => 'User'])

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Data User Terdaftar</h1>
            </div><!-- /.col -->

         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->

   @if (session('massage'))
      <div id="massage" data-massage="{{ session('massage') }}"></div>
   @endif

   <!-- Main content  ---------------------------------------------------------------------------------------------------------->
   <section class="content">
      <div class="container">

        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Action</th>
                <th scope="col">Foto</th>
                <th scope="col">nama</th>
                <th scope="col">email</th>
                <th scope="col">Status</th>
                <th scope="col">Terdaftar</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($user as $row)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        <a href="{{ route('user.editrole', ['user'=>$row->id]) }}" class="badge bg-primary text-decoration-none">Edit</a>
                        <a href="#" class="badge bg-info text-decoration-none">Detail</a>
                    </td>
                    <td>
                        <img src="{{ url('img/profile', $row->image) }}" alt="{{ $row->image }}" style="width: 50px;">
                    </td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>
                        @foreach($row->getRoleNames() as $v)
                           @if ($v) 
                              <label class="badge badge-success">{{ $v }}</label>
                           @else
                              <label class="badge badge-success">Not</label>
                           @endif
                        @endforeach
                    </td>
                    <td>{{ $row->created_at->diffForHumans() }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>

      </div><!-- /.container-fluid -->
   </section>
   <!-- /.content akhir -------------------------------------------------------------------------------------------------------->

</div>
<!-- /.content-wrapper -->
@endsection