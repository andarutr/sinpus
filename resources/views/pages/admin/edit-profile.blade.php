@extends('layouts.panel')

@section('title', 'Edit Profile User')

@section('content')
<div class="container-xxl">
  <!-- Page Header -->
  <div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">Edit Profile</h1>
  </div>
  <!-- /Page Header -->

  <!-- Page Body -->
  <div class="hk-pg-body">
    <livewire:admin.card-edit-profile />
  </div>
  <!-- /Page Body -->   
</div>
@endsection