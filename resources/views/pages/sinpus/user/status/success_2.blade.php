@extends('layouts.sinpus')

@section('title', 'Status Berhasil')

@section('content')
<div class="container">
    <div class="section">
    <div class="row blogs blog-view bot-0">
        <div class="col s12">
        <img alt="image" style="width: 100%;" src="/sinpus/assets/images/done.png">
        <div class="blog-content">
            <h5>Terimakasih telah meminjam buku!</h5>
            <p>Silahkan menuju perpustakaan untuk mengembalikan buku dan meminta approval kepada petugas perpustakaan :)</p>
            <div class="spacer" style="margin-top: 10px;"></div>
            <center>
                <a href="/user/history" class="waves-effect waves-light btn">Selengkapnya</a>
            </center>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection