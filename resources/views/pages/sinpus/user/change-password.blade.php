@extends('layouts.sinpus')

@section('title', 'Ganti Password')

@section('content')
<div class="container is-pagetitle">
      <div class="section">
        <h5 class="pagetitle">Ganti Password</h5>
        <p>Hai, John Doe!</p>
        <div class="divider"></div>
      </div>
    </div>
    <div class="container">
      <div class="section">
        <div class="row">
        <div class="row">
          <div class="input-field col s12">
            <i class="mdi mdi-lock-outline prefix"></i>
            <input id="password" type="password" class="validate">
            <label for="password">Password Lama</label>
          </div>
        </div>
          <div class="input-field col s12">
            <i class="mdi mdi-lock-outline prefix"></i>
            <input id="password" type="password" class="validate">
            <label for="password">Password Baru</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="mdi mdi-lock-outline prefix"></i>
            <input id="password" type="password" class="validate">
            <label for="password">Konfirmasi Password</label>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <a class="waves-effect waves-light btn-large bg-success ">Ganti Password</a>
          </div>
        </div>
        <div style="margin-top: 100px"></div>
      </div>
    </div>
@endsection