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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, reprehenderit aliquid? Dolorem iste esse voluptatem illum asperiores tempore officiis deserunt sunt sapiente soluta amet earum magni nihil, provident beatae totam.</p>
            </div>
        </div>
    </div>
  </div>
</div>
<div style="margin-top: 52px"></div>
@endsection