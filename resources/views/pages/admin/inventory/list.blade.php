@extends('layouts.panel')

@section('title', 'List Ketersediaan')

@section('content')
<div class="container-xxl">
  <!-- Page Header -->
  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">List Ketersediaan</h1>
  </div>
  <!-- /Page Header -->

  <!-- Page Body -->
  <div class="hk-pg-body">
    <div class="row">
      <div class="col-lg-11 col-sm-9 col-12">
      	@if(session('success_inventory_edit'))
	      <div class="alert alert-primary alert-wth-icon alert-dismissible fade show mt-3 mb-3" role="alert">
	        <span class="alert-icon-wrap"><i class="zmdi zmdi-check-circle"></i></span> {{ session('success_inventory_edit') }}
	        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	      </div>
	      @endif
				<table id="example" class="table table-striped table-responsive">
					<thead>
						<tr>
							<th>Foto</th>
							<th>Buku</th>
							<th>Author</th>
							<th>Status</th>
							<th>Updated At</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($books as $book)
						<tr>
							<td>
								<img src="/sinpus/assets/images/book/{{ $book->picture_book }}" class="img-fluid" width="80">
							</td>
							<td>{{ $book->nm_book }}</td>
							<td>{{ $book->author_book }}</td>
							<td>
								@if($book->status == 'Tersedia')
									<span class="badge badge-primary badge-pill">{{ $book->status }}</span>
								@else
									<span class="badge badge-secondary badge-pill">{{ $book->status }}</span>
								@endif
							</td>
							<td>{{ $book->updated_at }}</td>
							<td>
								@if($book->status == 'Tersedia')
								<a href="/admin/inventory/edit/{{ $book->id_book }}" class="btn btn-sm btn-secondary" onclick="return confirm('Yakin ingin mengubah status buku menjadi terpinjam?')">terpinjam!</a>
								@else
								<a href="/admin/inventory/edit/{{ $book->id_book }}" class="btn btn-sm btn-primary" onclick="return confirm('Yakin ingin mengubah status buku menjadi tersedia?')">tersedia!</a>
								@endif
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