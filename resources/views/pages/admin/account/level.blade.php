@extends('layouts.panel')

@section('title', 'Access Level')

@section('content')
<div class="container-xxl">
<div class="hk-pg-header pt-7 pb-4">
    <h1 class="pg-title">Account Level</h1>
</div>
<livewire:admin.access.card-level />
</div>
@endsection