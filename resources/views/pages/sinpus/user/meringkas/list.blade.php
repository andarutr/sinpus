@extends('layouts.panel')

@section('title', 'Meringkas Buku')

@section('content')
<div class="container-xxl">
  <!-- Page Header -->
  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">Meringkas Buku</h1>
    <p>Note: Kamu dapat meringkas buku jika status buku "Terpinjam"</p>
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
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($pinjam_buku as $pinjam)
						@if($pinjam->id_statusbuku === 3)
						<tr>
							<td>
								<img src="/sinpus/assets/images/book/{{ $pinjam->picture_book }}" class="img-fluid" width="80">
							</td>
							<td>{{ $pinjam->nm_book }}</td>
							<td>{{ $pinjam->nm_statusbuku }}</td>
							<td>
								@if($pinjam->id_statusbuku == 3)
									<a href="/user/meringkas-buku/{{ $pinjam->url_book }}">Meringkas!</a>
								@endif
							</td>
						</tr>
						@endif
						@endforeach
				</table>
      </div>
    </div>
  </div>
  <!-- /Page Body -->   

  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">Edit Ringkasan Buku</h1>
    <p>Note: Kamu dapat meringkas buku jika status buku "Terpinjam"</p>
  </div>

  <div class="hk-pg-body">
    <div class="row">
      <div class="col-lg-11 col-sm-9 col-12">
				<table id="example" class="table table-striped table-responsive">
					<thead>
						<tr>
							<th>Foto</th>
							<th>Buku</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($edit_ringkasan as $ringkasan)
						@if($ringkasan->id_statusbuku === 3)
						<tr>
							<td>
								<img src="/sinpus/assets/images/book/{{ $ringkasan->picture_book }}" class="img-fluid" width="80">
							</td>
							<td>{{ $ringkasan->nm_book }}</td>
							<td>{{ $ringkasan->nm_statusbuku }}</td>
							<td>
								@if($ringkasan->id_statusbuku == 3)
									<a href="/user/meringkas-buku/edit/{{ $ringkasan->url_book }}">Edit!</a>
								@endif
							</td>
						</tr>
						@endif
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