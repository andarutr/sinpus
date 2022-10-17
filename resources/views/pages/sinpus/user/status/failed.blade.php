@extends('layouts.sinpus')

@section('title', 'Status Berhasil')

@section('content')
<div class="container">
    <div class="section">
    <div class="row blogs blog-view bot-0">
        <div class="col s12">
        <img alt="image" style="width: 100%;" src="/sinpus/assets/images/failed.png">
        <div class="blog-content">
            <h5>Gagal meminjam Buku!</h5>
            <div class="spacer" style="margin-top: 10px;"></div>
            <center>
                <a href="/" class="waves-effect waves-light btn">Kembali</a>
            </center>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection