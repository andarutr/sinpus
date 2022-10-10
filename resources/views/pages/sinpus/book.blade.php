@extends('layouts.sinpus')

@section('title', 'Kumpulan Buku Hanya Untuk Kamu!')

@section('content')
<div class="divider"></div>
<div class="row ">
	<div class="col s12 pad-0">
		<h5 class="bot-20 sec-tit center ">Kumpulan Buku Terbaru!</h5>

		<div class="row settings-row ">
			<div class="col s6 ">
				<div class="setting-box">
					<div class="card">
						<a href="/buku/atomic-habit">
						<div class="card-image">
							<img src="/sinpus/assets/images/book/atomic-habits.jpeg">
						</div>
						<div class="card-content">
							<p>Atomic Habit</p>
							<p>James Clear</p>
							<p>Status: tersedia!</p>
						</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col s6 ">
				<div class="setting-box">
					<div class="card">
						<a href="/buku/atomic-habit">
						<div class="card-image">
							<img src="/sinpus/assets/images/book/psychology-of-money.jpg">
						</div>
						<div class="card-content">
							<p>Psychology Of Money</p>
							<p>Morgan Housel</p>
							<p>Status: terpinjam!</p>
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="divider"></div>
@endsection