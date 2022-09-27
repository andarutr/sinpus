@extends('layouts.auth')

@section('title', 'Forget Password')

@section('content')
<!-- login-->
<div class="login app-pages app-section">
	<div class="container">
		<div class="pages-title">
			<img src="/assets/img/logo.png" alt="Logo SINPUS" width="250">
			<h3 style="margin-top: 20px;">Forget Password </h3>
		</div>
		<form action="#">
			<input type="text" placeholder="Nama Lengkap">
			<input type="email" placeholder="Email">
			<button class="button shadow">Submit</button>
		</form>
	</div>
</div>
<!-- end login -->
@endsection