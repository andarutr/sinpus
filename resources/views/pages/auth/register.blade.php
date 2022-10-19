@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div class="hk-pg-wrapper">
  <!-- Page Body -->
  <div class="hk-pg-body">
    <!-- Container -->
    <div class="container-xxl">
      <!-- Row -->
      <div class="row">
        <div class="col-xl-7 col-lg-6 d-lg-block d-none v-separator separator-sm">
          <div class="auth-content py-md-0 py-8">
            <div class="row">
              <div class="col-xxl-9 col-xl-8 col-lg-11 text-center mx-auto">
                <img src="/panel/dist/img/macaroni-logged-out.png"  class="img-fluid w-sm-40 w-50 mb-3" alt="login"/>
                <h3 class="mb-2">Morning Quotes</h3>
                <p class="w-xxl-65 w-100 mx-auto">Buku-buku dapat mengembangkan kecerasan, membina watak, dan bahkan mengubah dunia. Tetapi tanpa dibaca, buku itu tiada artinya.</p>
                <p class="p-xs mt-5 text-light">All illustration are powered by <a href="https://icons8.com/ouch/" target="_blank" class="text-light"><u>Icons8</u></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-lg-6 col-md-7 col-sm-10 position-relative mx-auto">
          <div class="auth-content py-md-0 py-8">
            <form class="w-100" action="{{ route('register') }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-lg-10 mx-auto">
                  <h4 class="mb-4">Register</h4>
                  <div class="row gx-3">
                    <div class="form-group col-lg-12">
                      <div class="form-label-group">
                        <label>Name</label>
                      </div>
                      <input class="form-control" type="text" name="name" placeholder="Masukkan Nama" value="{{ old('name') }}" >
                      @error('name')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="form-group col-lg-12">
                      <div class="form-label-group">
                        <label>Email</label>
                      </div>
                      <input class="form-control" type="email" name="email" placeholder="Masukkan Nama" value="{{ old('email') }}" >
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
                  <button type="submit" class="btn btn-primary btn-uppercase btn-block">Register</button>
                  <p class="p-xs mt-2 text-center">Sudah memiliki akun? <a href="/login"><u>Login</u></a></p> 
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