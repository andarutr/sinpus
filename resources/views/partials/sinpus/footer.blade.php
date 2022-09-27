<div class="footer-menu circular">
    <ul>
      <li>
        <a href="sub-apps.html"> <i class="mdi mdi-open-in-app"></i>
          <span>Apps</span>
        </a>
      </li>
      <li>
        <a href="sub-pages.html"> <i class="mdi mdi-shape-outline"></i>
          <span>Pages</span>
        </a>
      </li>
      <li>
        <a href="/"> <i class="mdi mdi-home-outline"></i>
          <span>Home</span>
        </a>
      </li>
      <li>
        <a href="sub-uielements.html"> <i class="mdi mdi-laptop"></i>
          <span>UI</span>
        </a>
      </li>
      <li>
        <a href="sub-utilities-components.html"> <i class="mdi mdi-flask-outline"></i>
          <span>Components</span>
        </a>
      </li>

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