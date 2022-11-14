@extends('layouts.panel')

@section('title', 'History Peminjaman Buku')

@section('content')
<div class="container-xxl">
  <!-- Page Header -->
  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">History Peminjaman Buku</h1>
  </div>
  <livewire:admin.history.card-borrow-book />

  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">History Pengembalian Buku</h1>
  </div>
  <livewire:admin.history.card-return-book />
</div>
@endsection