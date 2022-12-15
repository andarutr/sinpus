@extends('layouts.sinpus')

@section('title', 'Kumpulan Kategori Buku')

@section('content')
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
<div class="divider" style="margin-top:150px;"></div>
@endsection