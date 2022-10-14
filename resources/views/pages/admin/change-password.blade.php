@extends('layouts.panel')

@section('title', 'Change Password User')

@section('content')
<div class="container-xxl">
  <!-- Page Header -->
  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">Change Password</h1>
  </div>
  <!-- /Page Header -->

  <!-- Page Body -->
  <div class="hk-pg-body">
    <div class="row edit-profile-wrap">
      <div class="col-lg-12 col-sm-9 col-12">
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab_block_1">
            <form action="/admin/change-password" method="POST">@csrf
              <div class="row gx-3">
                @if(session('success_change_password'))
                <div class="alert alert-primary alert-wth-icon alert-dismissible fade show" role="alert">
                  <span class="alert-icon-wrap"><i class="zmdi zmdi-check-circle"></i></span> {{ session('success_change_password') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @elseif(session('failed_change_password'))
                <div class="alert alert-danger alert-wth-icon alert-dismissible fade show" role="alert">
                  <span class="alert-icon-wrap"><i class="zmdi zmdi-check-circle"></i></span> {{ session('failed_change_password') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="col-sm-12">
                  <div class="form-group">
                    <label class="form-label">Password Lama</label>
                    <input class="form-control" type="password" name="old_password">
                    @error('old_password')<p class="text-danger">{{ $message }}</p>@enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label">Password Baru</label>
                    <input class="form-control" type="password" name="new_password" />
                    @error('new_password')<p class="text-danger">{{ $message }}</p>@enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label">Konfirmasi Password Baru</label>
                    <input class="form-control" type="password" name="password_confirmation" />
                    @error('password_confirmation')<p class="text-danger">{{ $message }}</p>@enderror
                  </div>
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary mt-5">Save Changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Page Body -->   
</div>
@endsection