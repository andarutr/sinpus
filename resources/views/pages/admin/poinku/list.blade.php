@extends('layouts.panel')

@section('title', 'List Poinku')

@section('content')
<div class="container-xxl">
  <!-- Page Header -->
  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">List Poinku</h1>
  </div>
  <!-- /Page Header -->

  <!-- Page Body -->
  <div class="hk-pg-body">
    <div class="row">
      <div class="col-lg-11 col-sm-9 col-12">
      	@if(session('success_poinku_create'))
	      <div class="alert alert-primary alert-wth-icon alert-dismissible fade show mt-3 mb-3" role="alert">
	        <span class="alert-icon-wrap"><i class="zmdi zmdi-check-circle"></i></span> {{ session('success_poinku_create') }}
	        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	      </div>
	      @elseif(session('success_poinku_delete'))
	      <div class="alert alert-success alert-wth-icon alert-dismissible fade show mt-3 mb-3" role="alert">
	        <span class="alert-icon-wrap"><i class="zmdi zmdi-check-circle"></i></span> {{ session('success_poinku_delete') }}
	        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	      </div>
	      @endif
				<table id="example" class="table table-striped table-responsive">
					<thead>
						<tr>
							<th>Foto</th>
							<th>Buku</th>
							<th>Peringkas</th>
							<th>Point</th>
							<th>Updated At</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($poinku as $pku)
						<tr>
							<td>
								<a href="/sinpus/assets/images/book/{{ $pku->picture_book }}" data-fancybox>
									<img src="/sinpus/assets/images/book/{{ $pku->picture_book }}" class="img-fluid" width="80">
								</a>
							</td>
							<td>{{ $pku->nm_book }}</td>
							<td>{{ $pku->name }}</td>
							<td>{{ $pku->pointku }}</td>
							<td>{{ $pku->updated_at }}</td>
							<td>
								<a href="/admin/ringkasan/view/{{ $pku->id_meringkas}}" class="btn btn-sm btn-primary">
									<i data-feather="eye"></i>
								</a>
								<a href="/admin/pointku/delete/{{ $pku->id_pointku }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">
									<i class="material-icons">delete</i>
								</a>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
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
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
@endpush