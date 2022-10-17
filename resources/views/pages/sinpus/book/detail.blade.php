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
            @if($book->status == 'Tersedia')
            <span class="badge blue" style="color: white;">{{ $book->status }}</span>
            @else
            <span class="badge red accent-2" style="color: white;">{{ $book->status }}</span>
            @endif
            <h5 class="title">Summary Book</h5>
            <span class="small date">Posting : {{ $book->created_at }}</span>
            <span class="small tags"><a class="small" href="#!">Author : {{ $book->author_book }}</a></span>
            <?= $book->description; ?>
            <div class="spacer"></div>
            <a class="waves-effect waves-light btn-large green darken-1"><i class="mdi mdi-message-text-outline left"></i>PINJAM</a>
            <div class="spacer" style="margin-top: 50px;"></div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection