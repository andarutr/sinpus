@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')
<div class="hk-pg-wrapper pt-0 pb-xl-0 pb-5">
  <div class="hk-pg-body pt-0 pb-xl-0">
    <!-- Container -->
    <div class="container-xxl">
      <!-- Row -->
      <div class="row">
        <div class="col-sm-10 position-relative mx-auto">
          <div class="auth-content py-8">
            <form class="w-100" action="{{ route('password.update') }}" method="POST">
              @csrf
              
              <!-- Password Reset Token -->
              <input type="hidden" name="token" value="{{ $request->route('token') }}">

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
                      <h4 class="mb-4 text-center">Reset Password</h4>
                      <div class="row gx-3 mt-3">
                        <div class="form-group col-lg-12">
                          <div class="form-label-group">
                            <label>Email</label>
                          </div>
                          <input class="form-control" type="text" name="email" placeholder="Masukkan Email" value="{{ old('email',$request->email) }}">
                          @error('email')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                        <div class="form-group col-lg-12">
                          <div class="form-label-group">
                            <label>Password</label>
                          </div>
                          <div class="input-group password-check">
                            <span class="input-affix-wrapper">
                              <input class="form-control" type="password" placeholder="Masukkan Password" name="password">
                              <a href="#" class="input-suffix text-muted">
                                <span class="feather-icon"><i class="form-icon" data-feather="eye"></i></span>
                                <span class="feather-icon d-none"><i class="form-icon" data-feather="eye-off"></i></span>
                              </a>
                            </span>
                          </div>
                          @error('password')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                        <div class="form-group col-lg-12">
                          <div class="form-label-group">
                            <label>Konfirmasi Password</label>
                          </div>
                          <div class="input-group password-check">
                            <span class="input-affix-wrapper">
                              <input class="form-control" type="password" placeholder="Masukkan Password" name="password_confirmation">
                              <a href="#" class="input-suffix text-muted">
                                <span class="feather-icon"><i class="form-icon" data-feather="eye"></i></span>
                                <span class="feather-icon d-none"><i class="form-icon" data-feather="eye-off"></i></span>
                              </a>
                            </span>
                          </div>
                          @error('password_confirmation')<p class="text-danger">{{ $message }}</p>@enderror
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary btn-uppercase btn-block">Reset</button>
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