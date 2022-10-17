@extends('layouts.panel')

@section('title', 'Edit Kategori')

@section('content')
<div class="container-xxl">
  <!-- Page Header -->
  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">Edit Kategori</h1>
  </div>
  <!-- /Page Header -->

  <!-- Page Body -->
  <div class="hk-pg-body">
    <div class="row edit-profile-wrap">
      <div class="col-lg-10 col-sm-9 col-10">
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab_block_1">
            <form action="/admin/category/edit/{{ $category->id_category }}" method="POST">@csrf
              <div class="row gx-3">
                <!-- If Sessions -->
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label">Kategori</label>
                    <input class="form-control" type="text" name="nm_category" value="{{ $category->nm_category }}">
                    @error('nm_category')<p class="text-danger">{{ $message }}</p>@enderror
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-label">URL</label>
                    <input class="form-control" type="text" name="url_category" value="{{ $category->url_category }}">
                    @error('url_category')<p class="text-danger">{{ $message }}</p>@enderror
                  </div>
                </div>
                
              </div>
              
              <button type="submit" class="btn btn-success mt-5">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Page Body -->   
</div>
@endsection