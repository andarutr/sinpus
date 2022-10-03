@extends('layouts.sinpus')

@section('title', 'Edit Profile User')

@section('content')
<div class="container is-pagetitle">
      <div class="section">
        <h5 class="pagetitle">Edit Profile</h5>
        <p>Hai, John Doe!</p>
        <div class="divider"></div>
      </div>
    </div>
    <div class="container">
      <div class="section">


        <div class="editprof-img">
          <div class="img-wrap circle">
            <img src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8c21pbGV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="foto User">
            <i class="mdi mdi-pencil prefix"></i>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <i class="mdi mdi-account-outline prefix"></i>
            <input id="first_name" type="text" class="validate">
            <label for="first_name">Nama Lengkap</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <i class="mdi mdi-email-outline prefix"></i>
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <i class="mdi mdi-cellphone prefix"></i>
            <input id="mobno" type="text" class="validate">
            <label for="mobno">No Hp</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <i class="mdi mdi-account prefix"></i>
            <input id="classw" type="text" class="validate">
            <label for="classw">Kelas</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <i class="mdi mdi-lock-outline prefix"></i>
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
        </div>


        <div class="row">
          <div class="col s12">
            <a class="waves-effect waves-light btn-large bg-primary ">Save Profile</a>
          </div>
        </div>
        <div style="margin-top: 100px"></div>
      </div>
    </div>
@endsection