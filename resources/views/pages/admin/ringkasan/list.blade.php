@extends('layouts.panel')

@section('title', 'List Ringkasan')

@section('content')
<div class="container-xxl">
  <!-- Page Header -->
  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">List Ringkasan</h1>
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
							<th>Nama</th>
							<th>Buku</th>
							<th>Deskripsi</th>
							<th>Updated At</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($peringkas as $pks)
						<tr>
							<td>
								<a href="/sinpus/assets/images/profile/{{ $pks->picture }}" data-fancybox>
									<img src="/sinpus/assets/images/profile/{{ $pks->picture }}" class="img-fluid" width="80">
								</a>
							</td>
							<td>{{ $pks->name }}</td>
							<td>{{ $pks->nm_book }}</td>
							<td><?= Str::limit($pks->ringkasan,100); ?></td>
							<td>{{ $pks->updated_at }}</td>
							<td>
								<a href="/admin/ringkasan/view/{{ $pks->id_meringkas }}" class="btn btn-primary btn-animated">Lihat</a>
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