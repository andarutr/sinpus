@extends('layouts.panel')

@section('title', 'Ringkasan Buku')

@section('content')
<div class="container-xxl">
  <!-- Page Header -->
  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">Ringkasan Buku</h1>
  </div>
  <!-- /Page Header -->

  <!-- Page Body -->
  <div class="hk-pg-body">
    <div class="row edit-profile-wrap">
      <div class="col-lg-12 col-sm-9 col-12">
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab_block_1">
              <div class="row gx-3">
                <div class="col-sm-12">
                  <div class="form-group">
                    <div class="media align-items-center">
                      <div class="media-head me-5">
                        <div class="avatar rounded avatar-xxl">
                          <img src="/sinpus/assets/images/book/{{ $peringkas->picture_book }}" alt="user" class="avatar-img">
                        </div>
                      </div>
                      <div class="media-body">
                        <div class="form-text text-muted">
                          <h6>{{ $peringkas->nm_book }}</h6>
                          <p>{{ $peringkas->author_book }}</p>
                          <p>{{ $peringkas->name }}</p>
                          <button type="button" class="btn btn-sm btn-success mt-2">NILAI</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="title title-xs title-wth-divider text-primary text-uppercase my-4"><span>Data Ringkasan</span></div>
              <div class="row gx-3">
                <div class="col-sm-12">
                  <div class="card shadow">
                    <div class="card-body">
                      <p><?= $peringkas->ringkasan; ?></p>
                    </div>
                  </div>
                </div>
              </div>              
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Page Body -->   
</div>
@endsection
