@extends('layouts.sinpus')

@section('title', 'Selamat Datang di Sistem Informasi Perpustakaan')

@section('content')
<div class="carousel carousel-fullscreen carousel-slider home_carousel ">

      <a class="carousel-item" href="#carousel-slide-0!">
        <div class="bg" style="background-image: url('/sinpus/assets/images/slider/slide-1.jpg')"></div>
        <div class="item-content center-align white-text">
          <div class="spacer-large"></div>
          <h3>Selamat Datang di SINPUS!</h3>
          <h5 class="light white-text">E-Library untuk kamu yang suka membaca</h5>
        </div>
      </a>
      <a class="carousel-item" href="#carousel-slide-1!">
        <div class="bg" style="background-image: url('/sinpus/assets/images/slider/slide-2.jpg')"></div>
        <div class="item-content center-align white-text">
          <div class="spacer-large"></div>
          <h3>Pilih Buku!</h3>
          <h5 class="light white-text">Pilih berbagai macam buku kesukaan mu!</h5>
        </div>
      </a>
      <!-- <a class="carousel-item" href="#carousel-slide-2!">
        <div class="bg" style="background-image: url('assets/images/slider-3.jpg')"></div>
        <div class="item-content center-align white-text">
          <div class="spacer-large"></div>
          <h3>ZAK has tons of features & functionalities</h3>
          <h5 class="light white-text">The best mobile app template ever.</h5>
        </div>
      </a>
      <a class="carousel-item" href="#carousel-slide-3!">
        <div class="bg" style="background-image: url('assets/images/slider-2.jpg')"></div>
        <div class="item-content right-align white-text">
          <div class="spacer-large"></div>
          <h3>ZAK is super fast and ultra light</h3>
          <h5 class="light white-text">The best mobile app template ever.</h5>
        </div>
      </a> -->

</div>

<div class="row primary-bg ">
	<div class="spacer"></div>
	<div class="spacer"></div>
	<h5 class="center bot-0 sec-tit white-text pad-15">Sinpus</h5>
	<p class="center-align white-text pad-30">SINPUS (Sistem Informasi Perpustakaan) adalah sebuah E-Library untuk kamu yang ingin meminjam buku perpustakaan secara online.</p>
	<div class="spacer"></div>
	<div class="spacer"></div>
</div>

<div class="container">
	<div class="section">
		<div class="row ">
			<div class="col s12 pad-0">
			<h5 class="bot-20 sec-tit center ">Kategori Buku</h5>
				<livewire:card-category>
			</div>
		</div>
	</div>
</div>

<div class="row primary-bg ">
	<div class="spacer"></div>
	<div class="spacer"></div>
	<h5 class="center bot-0 sec-tit white-text pad-15">Voltaire</h5>
	<p class="center-align white-text pad-30">Semakin aku banyak membaca, semakin aku banyak berpikir; semakin aku banyak belajar, semakin aku sadar bahwa aku tak mengetahui apa pun.</p>
	<div class="spacer"></div>
	<div class="spacer"></div>
</div>

<div class="divider"></div>
<div class="row ">
	<div class="col s12 pad-0">
		<h5 class="bot-20 sec-tit center ">Buku Terbaru!</h5>
			<livewire:card-book-list>
	</div>
</div>
<div class="divider"></div>
@endsection