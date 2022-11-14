@extends('layouts.panel')

@section('title', 'Buku')

@section('content')
<div class="container-xxl">
  <div class="hk-pg-body">
  	<livewire:admin.book.card-book />
  </div>
</div>
@endsection
