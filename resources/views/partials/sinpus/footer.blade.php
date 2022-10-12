<div class="footer-menu circular">
    <ul>
      <li>
        <a href="/buku"> <i class="mdi mdi-book-open-page-variant"></i>
          <span>Buku</span>
        </a>
      </li>
      <li>
        <a href="/kategori"> <i class="mdi mdi-shape-outline"></i>
          <span>Kategori</span>
        </a>
      </li>
      <li>
        <a href="/"> <i class="mdi mdi-home-outline"></i>
          <span>Home</span>
        </a>
      </li>
      @guest
      <li>
        <a href="/login"> <i class="mdi mdi-login"></i>
          <span>Login</span>
        </a>
      </li>
      <li>
        <a href="/register"> <i class="mdi mdi-account-plus"></i>
          <span>Daftar</span>
        </a>
      </li>
      @endguest
      @auth
      <li>
        <a href="/user/profil"> <i class="mdi mdi-account"></i>
          <span>Profil</span>
        </a>
      </li>
      <li>
        <a href="/logout"> <i class="mdi mdi-logout"></i>
          <span>Logout</span>
        </a>
      </li>
      @endauth
    </ul>
  </div>

  <script src="/sinpus/assets/js/pwa.js"></script>

  <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

  <!-- CORE JS FRAMEWORK - START -->
  <script src="/sinpus/modules/jquery/jquery-2.2.4.min.js"></script>
  <script src="/sinpus/modules/materialize/materialize.js"></script>
  <script src="/sinpus/modules/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="/sinpus/assets/js/variables.js"></script>
  <!-- CORE JS FRAMEWORK - END -->


  <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
  <script type="text/javascript">
    $(document).ready(function () {

      $(".carousel-fullscreen.carousel-slider").carousel({
        fullWidth: true,
        indicators: true
      });
      setTimeout(autoplay, 3500);
      function autoplay() {
        $(".carousel").carousel("next");
        setTimeout(autoplay, 3500);
      }
      $(".slider3").slider({
        indicators: false,
        height: 200,
      });

    }); 
  </script>
  <script src="/sinpus/assets/js/common.js"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


  <!-- CORE TEMPLATE JS - START -->
  <script src="/sinpus/modules/app/init.js"></script>
  <script src="/sinpus/modules/app/settings.js"></script>

  <script src="/sinpus/modules/app/scripts.js"></script>

  <!-- END CORE TEMPLATE JS - END -->


  <script src="/sinpus/assets/js/preloader.js"></script>