@extends('layout/template', ['title' => 'Dashboard', 'nav' => 'Dashboard'])

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

   <!-- Content Header (Page header) -->
   <div class="content-header pt-4">
      <div class="container-fluid">

         <div class="row justify-content-center">
            <div class="col-md-6">
               <div class="card">
                  <div class="card-header bg-warning">
                     Verifikasi Email
                  </div>
                  <div class="card-body">
                     <div class="row">
                        <div class="col">
                           <p>
                              Thanks for signing up! Before getting started, could you verify your email address by
                              clicking on the link we just emailed to you? If you didn't receive the email, we will
                              gladly send you another.
                           </p>
                        </div>
                     </div>

                     @if (session('status') == 'verification-link-sent')
                     <div class="alert alert-success" role="alert">
                        A new verification link has been sent to the email address you provided during registration.
                     </div>
                     @endif

                     <div class="row mt-2">
                        <div class="col-sm-6">
                           <form method="POST" action="{{ route('verification.send') }}">
                              @csrf

                              <button type="submit" class="btn btn-success">
                                 {{ __('Resend Verification Email') }}
                              </button>
                              {{-- <x-button>
                                    {{ __('Resend Verification Email') }}
                              </x-button> --}}
                           </form>
                        </div>
                        <div class="col-sm-6 text-end">
                           <form method="POST" action="{{ route('logout') }}">
                              @csrf

                              <button type="submit" class="btn btn-secondary">
                                 {{ __('Log Out') }}
                              </button>
                           </form>
                        </div>
                     </div>

                     {{-- <div class="mt-4 flex items-center justify-between">
                        <form method="POST" action="{{ route('verification.send') }}">
                     @csrf

                     <div class="row">
                        <x-button>
                           {{ __('Resend Verification Email') }}
                        </x-button>
                     </div>
                     </form>

                     <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                           {{ __('Log Out') }}
                        </button>
                     </form>
                  </div> --}}
               </div>
            </div>



         </div>
      </div>

   </div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
</div>
<!-- /.content-wrapper -->
{{-- <x-guest-layout>
   <x-auth-card>
      <x-slot name="logo">
         <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
         </a>
      </x-slot>

      <div class="mb-4 text-sm text-gray-600">
         {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
</div>

@if (session('status') == 'verification-link-sent')
<div class="mb-4 font-medium text-sm text-green-600">
   {{ __('A new verification link has been sent to the email address you provided during registration.') }}
</div>
@endif

<div class="mt-4 flex items-center justify-between">
   <form method="POST" action="{{ route('verification.send') }}">
      @csrf

      <div>
         <x-button>
            {{ __('Resend Verification Email') }}
         </x-button>
      </div>
   </form>

   <form method="POST" action="{{ route('logout') }}">
      @csrf

      <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
         {{ __('Log Out') }}
      </button>
   </form>
</div>
</x-auth-card>
</x-guest-layout> --}}
@endsection