@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<!-- login-->
<div class="login app-pages app-section">
	<div class="container">
		<div class="pages-title">
			<img src="/assets/img/logo.png" alt="Logo SINPUS" width="250">
			<h3 style="margin-top: 20px;">LOGIN</h3>
		</div>
		<form action="#">
			<input type="email" placeholder="Email">
			<input type="password" placeholder="password">
			<div><a href="/forget-password" class="forgot">Forgot Password?</a></div>
			<div class="chebox">
				<input type="checkbox" id="checkbox" />
					<label for="checkbox">Remember me</label>
			</div>
			<button class="button shadow">Login</button>
			<div class="create-account">Not Registered? <a href="/register">Create an account</a></div>
		</form>
		<div class="or">
			<h5 class="shadow">OR</h5>
			<button class="button shadow google">Login with Google</button>
			<button class="button shadow facebook">Login with Facebook</button>
		</div>
	</div>
</div>
<!-- end login -->
@endsection