@extends('layouts.sinpus')

@section('title', 'Profile User')

@section('content')
<div class="ui-profile">
    <div class="primg">
        <img src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8c21pbGV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="Foto User">
        <div class="prname white-text">
            <h3 class="name">John Doe</h3>
            <div class="pos">XII Animasi</div>
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