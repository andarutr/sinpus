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

  <livewire:user.summary.card-summary />

  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">Edit Ringkasan Buku</h1>
    <p>Note: Kamu dapat meringkas buku jika status buku "Terpinjam"</p>
  </div>

  <livewire:user.summary.card-summary-edit />
</div>
@endsection