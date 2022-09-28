@extends('layouts.auth')

@section('title', 'Forget Password')

@section('content')
<img class="responsive-img" style="width: 150px;" src="/sinpus/assets/images/logo.png" />
<div class="section"></div>

<h5 class="indigo-text">Reset Password</h5>
<div class="section"></div>

<div class="container">
  <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

    <form class="col s12" method="post">
      <div class='row'>
        <div class='col s12'>
        </div>
      </div>

      <div class='row'>
        <div class='input-field col s12'>
          <input class='validate' type='email' name='email' id='email' />
          <label for='email'>Enter your email</label>
        </div>
      </div>

      <br />
      <center>
        <div class='row'>
          <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect teal darken-3'>Reset Password</button>
        </div>
      </center>
    </form>
  </div>
</div>
@endsection