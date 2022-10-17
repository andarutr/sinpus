@extends('layouts.panel')

@section('title', 'List Kategori')

@section('content')
<div class="container-xxl">
  <!-- Page Header -->
  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">List Kategori</h1>
  </div>
  <!-- /Page Header -->

  <!-- Page Body -->
  <div class="hk-pg-body">
  	<a href="/admin/category/create" class="btn btn-outline-primary mb-4">Tambah Data</a>
    <div class="row">
      <div class="col-lg-11 col-sm-9 col-12">
      	@if(session('success_category_create'))
	      <div class="alert alert-primary alert-wth-icon alert-dismissible fade show mt-3 mb-3" role="alert">
	        <span class="alert-icon-wrap"><i class="zmdi zmdi-check-circle"></i></span> {{ session('success_category_create') }}
	        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	      </div>
	      @elseif(session('success_category_delete'))
	      <div class="alert alert-success alert-wth-icon alert-dismissible fade show mt-3 mb-3" role="alert">
	        <span class="alert-icon-wrap"><i class="zmdi zmdi-check-circle"></i></span> {{ session('success_category_delete') }}
	        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	      </div>
	      @elseif(session('success_category_edit'))
	      <div class="alert alert-primary alert-wth-icon alert-dismissible fade show mt-3 mb-3" role="alert">
	        <span class="alert-icon-wrap"><i class="zmdi zmdi-check-circle"></i></span> {{ session('success_category_edit') }}
	        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	      </div>
	      @endif
				<table id="example" class="table table-striped table-responsive">
					<thead>
						<tr>
							<th>Kategori</th>
							<th>URL</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($categories as $category)
						<tr>
							<td>{{ $category->nm_category }}</td>
							<td>{{ asset('kategori/'.$category->url_category) }}</td>
							<td>
								<a href="/kategori/{{ $category->url_category }}" class="btn btn-sm btn-primary" target="_blank"><i class="material-icons">visibility</i></a>
								<a href="/admin/category/edit/{{ $category->id_category }}" class="btn btn-sm btn-success"><i class="material-icons">edit</i></a>
								<a href="/admin/category/delete/{{ $category->id_category }}" class="btn btn-sm btn-danger"><i class="material-icons" onclick="return confirm('Yakin ingin menghapus data?')">delete</i></a>
							</td>
						</tr>
						@endforeach
				</table>
      </div>
    </div>
  </div>
  <!-- /Page Body -->   
</div>
@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@endpush

@push('scripts')
<!-- Data Table JS -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>
@endpush