@extends('layouts.sinpus')

@section('title', 'Kumpulan Kategori Buku')

@section('content')
<div class="container">
	<div class="section">
		<div class="row ">
			<div class="col s12 pad-0">
				<h5 class="bot-20 sec-tit center ">Kategori Buku</h5>

				<div class="row settings-row ">
					@foreach($category as $ctg)
					<div class="col s6 ">
						<div class="setting-box z-depth-1 center ">
							<a href="/kategori/{{ $ctg->url_category }}">
								<i class="mdi mdi-book-open-page-variant"></i>
								<h6>{{ $ctg->nm_category}}</h6>
							</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
<div class="divider" style="margin-top:150px;"></div>
@endsection