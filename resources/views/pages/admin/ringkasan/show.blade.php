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
    <a href="{{ url('admin/ringkasan') }}" class="btn btn-sm btn-success">Kembali</a>
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
                          <button type="button" class="btn btn-sm btn-success mt-2" data-bs-toggle="modal" data-bs-target="#givePoin">
                            Berikan Poin
                          </button>
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

<!-- Modal forms-->
<div class="modal fade" id="givePoin" tabindex="-1" role="dialog" aria-labelledby="givePoin" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Poinku</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/admin/pointku/create" method="POST">
          @csrf
          <input type="hidden" name="id_user" value="{{ $peringkas->id }}">
          <input type="hidden" name="id_book" value="{{ $peringkas->id_book }}">
          <input type="hidden" name="id_meringkas" value="{{ $peringkas->id_meringkas }}">
          <div class="mb-3">
            <label class="form-label" for="name">Nama</label>
            <input type="text" class="form-control" id="name" value="{{ $peringkas->name }}" disabled>
          </div>
          <div class="mb-3">
            <label class="form-label" for="poin">Point</label>
            <input type="number" class="form-control" id="poin" name="poinku" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
