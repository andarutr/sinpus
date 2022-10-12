@extends('layouts.sinpus')

@section('title', 'Profile User')

@section('content')
<div class="ui-profile">
    <div class="primg">
        <img src="/sinpus/assets/images/profile/{{ $user->picture }}" alt="Foto User" width="812" height="512">
        <div class="prname white-text">
            <h3 class="name">{{ $user->name }}</h3>
            <div class="pos">{{ $user->nomor_kelas }} {{ $user->prodi_kelas }}</div>
        </div>
    </div>
    <div class="prinfo card-panel primary-bg white-text">
        <div class="count">
            <h4 class="num">12</h4>
            <div class="tit">Wishlist</div>
        </div>
        <div class="count">
            <h4 class="num">453</h4>
            <div class="tit">Point</div>
        </div>
        <div class="count">
            <h4 class="num">25</h4>
            <div class="tit">Histori</div>
        </div>
    </div>

  <div class="container">
    <div class="section">
        <div class="row ">
            <div class="col s12 pad-0"><h5 class="bot-20 sec-tit  ">About</h5>    
                <p>Nama Lengkap : {{ $user->name }}</p>
                <p>Email : {{ $user->email }}</p>
                <p>Daftar Pada : {{ $user->created_at }}</p>
                <p>Terverifikasi Pada : {{ $user->email_verified_at }}</p>
            </div>
            <a class="waves-effect waves-light btn-large green darken-1" href="/user/profil/edit"><i class="mdi mdi-message-text-outline left"></i>EDIT PROFIL</a>
        </div>
    </div>
  </div>
</div>
<div style="margin-top: 80px"></div>
@endsection