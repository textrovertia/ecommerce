<!DOCTYPE html>
<?php
     require_once '../settings/core.php';
     $login_menu = login_menu('../login/login.php', '../login/logout.php', '../login/signup.php');
     $admin_menu = admin_page('../admin/admin.php');
     $writer_page = writer_page('../view/writer.php');
     check_login();

    //  Check payment as well
?>
<html>
  <head>
    <title>Generic - Editorial by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <link rel="stylesheet" href="../assets/css/main.css" />
    
    <link
      rel="shortcut icon"
      href="../images/Logo Icon.ico"
      type="image/x-icon"
    />
  </head>
  <body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Main -->
      <div id="main">
        <div class="inner">
          <!-- Header -->
          <?php
          require_once '../classes/header.php';
          $header = new Header();
          echo $header->get_html();
        ?>

          <!-- Content -->
          <section>
            <header class="main">
              <h1>Generic</h1>
              <p>Story by Nanna Oye</p>
            </header>

            <span class="image main"
              ><img src="images/pic11.jpg" alt=""
            /></span>

            <p>
              Donec eget ex magna. Interdum et malesuada fames ac ante ipsum
              primis in faucibus. Pellentesque venenatis dolor imperdiet dolor
              mattis sagittis. Praesent rutrum sem diam, vitae egestas enim
              auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit
              amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a
              elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris.
              Curabitur sapien risus, commodo eget turpis at, elementum
              convallis elit. Pellentesque enim turpis, hendrerit.
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
              dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora
              torquent per conubia nostra, per inceptos himenaeos. Etiam
              tristique libero eu nibh porttitor fermentum. Nullam venenatis
              erat id vehicula viverra. Nunc ultrices eros ut ultricies
              condimentum. Mauris risus lacus, blandit sit amet venenatis non,
              bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at,
              euismod in lectus. Pellentesque habitant morbi tristique senectus
              et netus et malesuada fames ac turpis egestas. In non lorem sit
              amet elit placerat maximus. Pellentesque aliquam maximus risus,
              vel sed vehicula.
            </p>

            <p>
              Interdum et malesuada fames ac ante ipsum primis in faucibus.
              Pellentesque venenatis dolor imperdiet dolor mattis sagittis.
              Praesent rutrum sem diam, vitae egestas enim auctor sit amet.
              Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien
              risus, commodo eget turpis at, elementum convallis elit.
              Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.
            </p>

            <hr class="major" />
            <p>
              <span class="image"> <h1>Ad Here</h1> </span>
            </p>

            <hr class="major" />

            <h2>Interdum sed dapibus</h2>
            <p>
              Donec eget ex magna. Interdum et malesuada fames ac ante ipsum
              primis in faucibus. Pellentesque venenatis dolor imperdiet dolor
              mattis sagittis. Praesent rutrum sem diam, vitae egestas enim
              auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit
              amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a
              elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris.
              Curabitur sapien risus, commodo eget turpis at, elementum
              convallis elit. Pellentesque enim turpis, hendrerit.
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
              dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora
              torquent per conubia nostra, per inceptos himenaeos. Etiam
              tristique libero eu nibh porttitor fermentum. Nullam venenatis
              erat id vehicula viverra. Nunc ultrices eros ut ultricies
              condimentum. Mauris risus lacus, blandit sit amet venenatis non,
              bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at,
              euismod in lectus. Pellentesque habitant morbi tristique senectus
              et netus et malesuada fames ac turpis egestas. In non lorem sit
              amet elit placerat maximus. Pellentesque aliquam maximus risus,
              vel sed vehicula. Interdum et malesuada fames ac ante ipsum primis
              in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis
              sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit
              amet. Pellentesque leo mauris, consectetur id ipsum sit amet,
              fersapien risus, commodo eget turpis at, elementum convallis elit.
              Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.
            </p>

            <hr class="major" />

            <h2>Magna etiam veroeros</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
              dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora
              torquent per conubia nostra, per inceptos himenaeos. Etiam
              tristique libero eu nibh porttitor fermentum. Nullam venenatis
              erat id vehicula viverra. Nunc ultrices eros ut ultricies
              condimentum. Mauris risus lacus, blandit sit amet venenatis non,
              bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at,
              euismod in lectus. Pellentesque habitant morbi tristique senectus
              et netus et malesuada fames ac turpis egestas. In non lorem sit
              amet elit placerat maximus. Pellentesque aliquam maximus risus,
              vel sed vehicula.
            </p>
            <p>
              Interdum et malesuada fames ac ante ipsum primis in faucibus.
              Pellentesque venenatis dolor imperdiet dolor mattis sagittis.
              Praesent rutrum sem diam, vitae egestas enim auctor sit amet.
              Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien
              risus, commodo eget turpis at, elementum convallis elit.
              Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.
            </p>

            <hr class="major" />

            <h2>Lorem aliquam bibendum</h2>
            <p>
              Donec eget ex magna. Interdum et malesuada fames ac ante ipsum
              primis in faucibus. Pellentesque venenatis dolor imperdiet dolor
              mattis sagittis. Praesent rutrum sem diam, vitae egestas enim
              auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit
              amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a
              elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris.
              Curabitur sapien risus, commodo eget turpis at, elementum
              convallis elit. Pellentesque enim turpis, hendrerit.
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
              dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora
              torquent per conubia nostra, per inceptos himenaeos. Etiam
              tristique libero eu nibh porttitor fermentum. Nullam venenatis
              erat id vehicula viverra. Nunc ultrices eros ut ultricies
              condimentum. Mauris risus lacus, blandit sit amet venenatis non,
              bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at,
              euismod in lectus. Pellentesque habitant morbi tristique senectus
              et netus et malesuada fames ac turpis egestas. In non lorem sit
              amet elit placerat maximus. Pellentesque aliquam maximus risus,
              vel sed vehicula.
            </p>
          </section>
        </div>
      </div>

      <!-- Sidebar -->
      <div id="sidebar">
                <div class="inner">
                <!-- Search -->
                <section id="search" class="alt">
                    <form method="post" action="#">
                    <input type="text" name="query" id="query" placeholder="Search" />
                    </form>
                </section>
        
                <!-- Menu -->
                <nav id="menu">
                    <header class="major">
                    <h2>Menu</h2>
                    </header>
                    <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>
                        <span class="opener">Topics</span>
                        <ul>
                        <li><a href="../view/finance.php">Finance</a></li>
                        <li><a href="../view/tech.php">Tech</a></li>
                        <li><a href="../view/lifestyle.php">Lifestyle</a></li>
                        </ul>
                    </li>
                  
                    <?php echo $login_menu ?>
  
                    <li><a href="../view/elements.php">Elements</a></li>
                    
                    <?php echo $writer_page ?>
                    <?php echo $admin_menu ?>
                    </ul>
                </nav>
        
                <!-- Section -->
                <section>
                    <header class="major">
                    <h2>Get in touch</h2>
                    </header>
                    <p>
                    Sed varius enim lorem ullamcorper dolore aliquam aenean ornare
                    velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed
                    aliquam facilisis ante interdum. Sed nulla amet lorem feugiat
                    tempus aliquam.
                    </p>
                    <ul class="contact">
                    <li class="icon solid fa-envelope">
                        <a href="#">information@untitled.tld</a>
                    </li>
                    <li class="icon solid fa-phone">(000) 000-0000</li>
                    <li class="icon solid fa-home">
                        1234 Somewhere Road #8254<br />
                        Nashville, TN 00000-0000
                    </li>
                    </ul>
                </section>
        
                <!-- Footer -->
                <footer id="footer">
                    <p class="copyright">
                    &copy; Untitled. All rights reserved. Demo Images:
                    <a href="https://unsplash.com">Unsplash</a>. Design:
                    <a href="https://html5up.net">HTML5 UP</a>.
                    </p>
                </footer>
                </div>
            </div>
    </div>  
    </div>

    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>
  </body>
</html>
