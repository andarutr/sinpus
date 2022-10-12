<ul id="slide-nav" class="sidenav sidemenu">
    <li class="user-wrap">
      <div class="user-view row">
        @guest
        <div class="col s3 imgarea">
          <a href="#user" class="status available"><img class="circle" src="/sinpus/assets/images/icons/android-icon-96x96.png" alt="menu user"></a>
        </div>
        <div class="col s9 infoarea">
          <p>Belum Masuk? Silahkan <a href="/login" style="color: blue;">Login</a></p>
        </div>
        @endguest
        @auth
        <div class="col s3 imgarea">
          <a href="#user" class="status available"><img class="circle" src="/sinpus/assets/images/profile/{{ Auth::user()->picture }}" alt="menu user"></a>
        </div>
        <div class="col s9 infoarea">
          <p class="name">{{ Auth::user()->name }}</p>
          <p class="email">{{ Auth::user()->email }}</p>
        </div>
        @endauth
      </div>
    </li>
    <li class="menulinks">
      <ul class="collapsible">
        <!-- Menu Data Start-->
        <li class="sh-wrap">
          <div class="subheader">Menu</div>
        </li>
        <li class="lvl1 ">
          <div class=" waves-effect index">
            <a href="/">
              <i class="mdi mdi-home-outline"></i>
              <span class="title">Home</span></a>
          </div>
        </li>
        <li class="lvl1 ">
          <div class=" waves-effect index">
            <a href="/kategori">
              <i class="mdi mdi-widgets"></i>
              <span class="title">Kategori</span></a>
          </div>
        </li>
        <li class="lvl1 ">
          <div class=" waves-effect index">
            <a href="/buku">
              <i class="mdi mdi-book-open-page-variant"></i>
              <span class="title">Buku</span></a>
          </div>
        </li>
        @auth
        <li class="sh-wrap">
          <div class="subheader">Fitur</div>
        </li>
        <li class="lvl1 ">
          <div class=" waves-effect index">
            <a href="/user/profil">
              <i class="mdi mdi-account"></i>
              <span class="title">Profil</span></a>
          </div>
        </li>
        <li class="lvl1 ">
          <div class=" waves-effect index">
            <a href="/user/change-password">
              <i class="mdi mdi-lock"></i>
              <span class="title">Ganti Password</span></a>
          </div>
        </li>
        <li class="lvl1 ">
          <div class=" waves-effect index">
            <a href="/">
              <i class="mdi mdi-book"></i>
              <span class="title">Wishlist</span></a>
          </div>
        </li>
        <li class="lvl1 ">
          <div class=" waves-effect index">
            <a href="/">
              <i class="mdi mdi-history"></i>
              <span class="title">Histori</span></a>
          </div>
        </li>
        <li class="lvl1 ">
          <div class=" waves-effect index">
            <a href="/">
              <i class="mdi mdi-pen"></i>
              <span class="title">Meringkas</span></a>
          </div>
        </li>
        @endauth
      </ul>
    </li>
  </ul>