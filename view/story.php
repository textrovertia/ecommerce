<!DOCTYPE html>
<?php
     require_once '../settings/core.php';
     require_once '../controllers/new_article_controller.php';
     $login_menu = login_menu('../login/login.php', '../login/logout.php', '../login/signup.php');
     $admin_menu = admin_page('../admin/admin.php');
     $writer_page = writer_page('../view/writer.php');
     check_login();

     if(isset($_SESSION['customer_id'])){
      $user_id = $_SESSION['customer_id'];
      $current_date = strtotime(date('y-m-d'));
      
      $payment_check = check_last_payment_controller($user_id); 

      if(!$payment_check){
        header('Location: ../functionalities/payment.php');
      }
      
      //  Get date of most recent payment 
      $payment_date = strtotime($payment_check['payment_date']);

      //  Compare date to current date, and check plan
      $difference = ($current_date - $payment_date)/60/60/24;
      
      // Check for weekly payment 
      if($payment_check['amt'] == 10 && $difference > 7){
        header('Location: ../functionalities/payment.php');
      }

      // Check for monthly payment 
      if($payment_check['amt'] == 35 && $difference > 30){
        header('Location: ../functionalities/payment.php');
      }

      // Check for yearly payment
      if($payment_check['amt'] == 140 && $difference > 365 ){
        header('Location: ../functionalities/payment.php');
      }

      if (!isset($_GET['id'])){
        header('Location: ../index.php');
      }

      $article_id = $_GET['id'];
      $article = select_one_article_controller($article_id);
      $author = select_article_writer_controller($article['writer_id'])['customer_name'];
  }
?>
<html>
  <head>
    <title>Story</title>
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
              <h1><?php echo $article['article_title'] ?></h1>
              <p>Story by <?php echo $author ?></p>
            </header>

            <span class="image main"
              ><img src="../images/article_images/<?php echo $article['article_image'] ?>" alt=""
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
                    <li><a href="../index.php">Home</a></li>
                    <li>
                        <span class="opener">Categories</span>
                        <ul>
                        <li><a href="./finance.php">Finance</a></li>
                        <li><a href="./tech.php">Tech</a></li>
                        <li><a href="./lifestyle.php">Lifestyle</a></li>
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
                    <a href="mailto:nanna.abankwah@ashesi.edu.gh" target='_blank'>kase3bo@gmail.com</a>
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
