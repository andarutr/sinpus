@extends('layouts.auth')

@section('title', 'Lupa Password')

@section('content')
<div class="hk-pg-wrapper pt-0 pb-xl-0 pb-5">
  <div class="hk-pg-body pt-0 pb-xl-0">
    <!-- Container -->
    <div class="container-xxl">
      <!-- Row -->
      <div class="row">
        <div class="col-sm-10 position-relative mx-auto">
          <div class="auth-content py-8">
            <form class="w-100" action="{{ route('password.email') }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-lg-5 col-md-7 col-sm-10 mx-auto">
                  <div class="text-center mb-7">
                    <a class="navbar-brand me-0" href="/login">
                      <img class="brand-img d-inline-block" src="/panel/dist/img/logo-light.png" alt="brand">
                    </a>
                  </div>
                  @if(session('status'))
                    <div class="alert alert-primary" role="alert">
                      {{ session('status') }}
                    </div>
                  @endif
                  <div class="card card-lg card-border">
                    <div class="card-body">
                      <h4 class="mb-4 text-center">Lupa Password</h4>
                      <p>
                        lupa kata sandi Anda? Tidak masalah. Cukup beri tahu kami alamat email Anda dan kami akan mengirimkan email kepada Anda tautan pengaturan ulang kata sandi yang memungkinkan Anda memilih yang baru.
                      </p>
                      <div class="row gx-3 mt-3">
                        <div class="form-group col-lg-12">
                          <div class="form-label-group">
                            <label>Email</label>
                          </div>
                          <input class="form-control" type="text" name="email" placeholder="Masukkan Email" value="{{ old('email') }}">
                          @error('email')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary btn-uppercase btn-block">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /Row -->
    </div>
    <!-- /Container -->
  </div>
  <!-- /Page Body -->
</div>
@endsection