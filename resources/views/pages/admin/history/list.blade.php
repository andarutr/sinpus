@extends('layouts.panel')

@section('title', 'History Peminjaman Buku')

@section('content')
<div class="container-xxl">
  <!-- Page Header -->
  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">History Peminjaman Buku</h1>
  </div>
  <!-- /Page Header -->

  <!-- Page Body -->
  <div class="hk-pg-body">
    <div class="row">
      <div class="col-lg-11 col-sm-9 col-12">
				<table id="example" class="table table-striped table-responsive">
					<thead>
						<tr>
							<th>Foto</th>
							<th>Buku</th>
							<th>Status</th>
							<th>Dipinjam Oleh</th>
							<th>Dipinjam Pada</th>
						</tr>
					</thead>
					<tbody>
						@foreach($histories_pinjam as $history)
						<tr>
							<td>
								<img src="/sinpus/assets/images/book/{{ $history->picture_book }}" class="img-fluid" width="80">
							</td>
							<td>{{ $history->nm_book }}</td>
							<td>{{ $history->nm_statusbuku }}</td>
							<td>{{ $history->name }}</td>
							<td>{{ $history->created_at }}</td>
						</tr>
						@endforeach
				</table>
      </div>
    </div>
  </div>
  <!-- /Page Body -->   

  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">History Pengembalian Buku</h1>
  </div>

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