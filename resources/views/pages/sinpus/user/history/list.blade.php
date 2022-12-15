@extends('layouts.panel')

@section('title', 'History')

@section('content')
<div class="container-xxl">
  <livewire:user.history.card-borrow />
  <livewire:user.history.card-return />
</div>
@endsection