@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<!-- login-->
<div class="login app-pages app-section">
	<div class="container">
		<div class="pages-title">
			<img src="/assets/img/logo.png" alt="Logo SINPUS" width="250">
			<h3 style="margin-top: 20px;">REGISTER</h3>
		</div>
		<form action="#">
			<input type="text" placeholder="Nama Lengkap">
			<input type="email" placeholder="Email">
			<input type="password" placeholder="Password">
			<input type="password" placeholder="Konfirmasi Password">
			<button class="button shadow" style="background-color: #2ec4b6;">Register</button>
			<div class="create-account">Registered? <a href="/login">Login into your account</a></div>
		</form>
	</div>
</div>
<!-- end login -->
@endsection