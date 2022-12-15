@extends('layouts.sinpus')

@section('title', 'Kumpulan Buku Hanya Untuk Kamu!')

@section('content')
<div class="divider"></div>
<div class="row ">
	<div class="col s12 pad-0">
		<h5 class="bot-20 sec-tit center ">Kumpulan Buku Terbaru!</h5>
		<livewire:card-book-list>		
	</div>
</div>
<div class="divider" style="margin-top: 100px;"></div>
@endsection