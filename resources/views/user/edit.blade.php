@extends('layout/template', ['title' => 'Edit User', 'nav' => 'User'])

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Detail User</h1>
            </div><!-- /.col -->

         </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
   {{-- @dump($userRole[0]) --}}

   <!-- Main content  ---------------------------------------------------------------------------------------------------------->
   <section class="content">
      <div class="container-fluid">

         <div class="row">
            <div class="col-md-8">
               <div class="card mb-3">
                  <div class="row g-0">
                     <div class="col-md-4">
                        <img src="{{ url('img/profile', $user->image) }}" alt="{{ $user->name }}"
                           style="width: 100%">
                     </div>
                     <div class="col-md-8 position-relative">
                        <div class="card-body">
                           <div class="mb-0 row">
                              <label for="staticEmail" class="col-sm-2 col-form-label">Status</label>
                              <div class="col-sm-3">
                                 <p class="form-control-plaintext">
                                    @foreach($user->getRoleNames() as $v)
                                       <label class="badge badge-success">{{ $v }}</label>
                                    @endforeach
                                 </p>
                              </div>
                              <div class="col-sm">
                                 <button type="button" class="badge bg-primary mt-2 d-inline" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Edit
                                 </button>
                                 @error('role')
                                 <small class="text-danger text-decoration-underline">Pilih Role!</small>
                                 @enderror
                              </div>
                           </div>
                           <div class="mb-0 row">
                              <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                              <div class="col-sm-10">
                                 <p class="form-control-plaintext">{{ $user->name }}</p>
                              </div>
                           </div>
                           <div class="mb-0 row">
                              <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                              <div class="col-sm-10">
                                 <p class="form-control-plaintext">{{ $user->email }}</p>
                              </div>
                           </div>
                        </div>

                        <div class="card-footer bg-transparent border-0 position-absolute bottom-0 start-0">
                           <p class="card-text"><small class="text-muted">Created
                                 {{ $user->created_at->diffForHumans() }}</small>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div><!-- /.container-fluid -->
   </section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-sm">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Edit Status</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
      <form action="{{ route('user.updaterole', ['user' => $user->id]) }}" method="post">
         @csrf
         @method('put')
         <div class="modal-body">
            <select class="form-select" aria-label="Default select example" name="role">
               <option value="" selected>Open this select menu</option>
               @foreach ($roles as $role)
                     @if (isset($userRole[0]) && $userRole[0] === $role)
                        <option value="{{ $role }}" selected>{{ $role }}</option>
                     @else
                        <option value="{{ $role }}">{{ $role }}</option>
                     @endif
               @endforeach
            </select>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
         </div>
      </form>
     </div>
   </div>
 </div>
   <!-- /.content akhir -------------------------------------------------------------------------------------------------------->

</div>
<!-- /.content-wrapper -->
@endsection