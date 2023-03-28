<!DOCTYPE html>
<html lang="en" class=" ">
<head>
  @include('partials.sinpus.header')
</head>
@mobile
<body class="html" data-header="light" data-footer="light" data-header_align="app" data-menu_type="left" data-menu="light" data-menu_icons="on" data-footer_type="left" data-site_mode="light" data-footer_menu="show" data-footer_menu_style="light">
  @include('partials.sinpus.loader')

  @include('partials.sinpus.navbar')
  @include('partials.sinpus.slider')
  
  @include('partials.sinpus.slide-setting')
  
  <div class="content-area">

    @yield('content')

    @include('partials.sinpus.copyright')
  </div>
  <!--.content-area-->

  @include('partials.sinpus.footer')
</body>
@endmobile
@desktop
<body style="background-color: white;">
<center>
  <h1>Only Mobile Version</h1>
  <img src="/sinpus/assets/images/oops.jpg" width="350">
  <p>Demi kenyamanan user gunakan perangkat mobile untuk mengakses website sinpus!</p>
</center>
</body>
@enddesktop
</html>