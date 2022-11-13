@extends('layouts.panel')

@section('title', 'List Buku')

@section('content')
<div class="container-xxl">
  <div class="hk-pg-body">
  	<livewire:admin.book.card-book />
  </div>
</div>
@endsection

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
