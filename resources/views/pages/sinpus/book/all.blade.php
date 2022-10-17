@extends('layouts.sinpus')

@section('title', 'Kumpulan Buku Hanya Untuk Kamu!')

@section('content')
<div class="divider"></div>
<div class="row ">
	<div class="col s12 pad-0">
		<h5 class="bot-20 sec-tit center ">Kumpulan Buku Terbaru!</h5>

		<div class="row settings-row ">
			@foreach($books as $book)
			<div class="col s6 ">
				<div class="setting-box">
					<div class="card">
						<a href="/buku/{{ $book->url_book }}">
						<div class="card-image">
							<img src="/sinpus/assets/images/book/{{ $book->picture_book }}">
						</div>
						<div class="card-content">
							<p>{{ $book->nm_book }}</p>
						</div>
						</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
<div class="divider" style="margin-top: 100px;"></div>
@endsection