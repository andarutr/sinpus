@extends('layouts.sinpus')

@section('title', $book->nm_book)

@section('content')
<div class="container  is-pagetitle">

      <div class="section">
        <h5 class="pagetitle">{{ $book->nm_book }}</h5>
        <div class="divider"></div>
      </div>
</div>
<div class="container">
    <div class="section">


    <div class="row ui-mediabox blogs blog-view bot-0">
        <div class="col s12">
        <a class="img-wrap" href="/sinpus/assets/images/book/{{ $book->picture_book }}" data-fancybox="images"
            data-caption="Web designing at its very best">
            <img alt="image" class=" z-depth-1" style="width: 100%;" src="/sinpus/assets/images/book/{{ $book->picture_book }}">
        </a>
        <div class="blog-content">
            @if($book->id_statusbuku === 1)
            <span class="badge blue" style="color: white;">{{ $book->nm_statusbuku }}</span>
            @else
            <span class="badge red accent-2" style="color: white;">Tidak Tersedia</span>
            @endif
            <h5 class="title">Summary Book</h5>
            <span class="small date">Posting : {{ $book->created_at }}</span>
            <span class="small tags"><a class="small" href="#!">Author : {{ $book->author_book }}</a></span>
            <?= $book->description; ?>
            <div class="spacer"></div>
            @if($book->id_statusbuku === 1)
            <a href="/user/pinjam/{{ $book->url_book }}" class="waves-effect waves-light btn-large green darken-2" onclick="return confirm('Yakin ingin meminjam buku ini?')"><i class="mdi mdi-message-text-outline left"></i>PINJAM</a>
            @endif
            <div class="spacer" style="margin-top: 50px;"></div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection