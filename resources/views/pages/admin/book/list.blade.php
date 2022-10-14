@extends('layouts.panel')

@section('title', 'List Buku')

@section('content')
<div class="container-xxl">
  <!-- Page Header -->
  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">List Buku</h1>
  </div>
  <!-- /Page Header -->

  <!-- Page Body -->
  <div class="hk-pg-body">
  	<a href="" class="btn btn-outline-primary mb-4">Tambah Data</a>
    <div class="row">
      <div class="col-lg-10 col-sm-9 col-12">
		<table id="example" class="table table-striped table-responsive">
			<thead>
				<tr>
					<th>Foto</th>
					<th>Buku</th>
					<th>Author</th>
					<th>Publisher</th>
					<th>Created At</th>
					<th>Updated At</th>
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
					<td>{{ $book->publish_from }}</td>
					<td>{{ $book->created_at }}</td>
					<td>{{ $book->updated_at }}</td>
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