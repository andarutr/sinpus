@extends('layouts.sinpus')

@section('title', 'Status Berhasil')

@section('content')
<div class="container">
    <div class="section">
    <div class="row blogs blog-view bot-0">
        <div class="col s12">
        <img alt="image" style="width: 100%;" src="/sinpus/assets/images/done.png">
        <div class="blog-content">
            <h5>Kamu berhasil memperbarui ringkasan buku!</h5>
            <p>Kamu dapat melihat ringkasan dengan mengunjungi menu meringkas atau klik tombol dibawah :)</p>
            <div class="spacer" style="margin-top: 10px;"></div>
            <center>
                <a href="/user/meringkas" class="waves-effect waves-light btn">Selengkapnya</a>
            </center>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection