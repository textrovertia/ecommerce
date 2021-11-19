  <!-- Sidebar -->
  <?php 
      require_once '../settings/core.php';
      $login_menu = login_menu('../login/login.php', '../login/logout.php', '../login/signup.php');
      $admin_menu = admin_page('../admin/admin.php')
      
?>
<!DOCTYPE html>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Finance</title>
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

          <!-- Menu -->
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
                    <li>
                        <span class="opener">Categories</span>
                        <ul>
                        <li><a href="view/finance.php">Finance</a></li>
                        <li><a href="view/tech.php">Tech</a></li>
                        <li><a href="view/lifestyle.php">Lifestyle</a></li>
                        </ul>
                    </li>
                  
                    <?php echo $login_menu ?>
                    <li><a href="view/elements.php">Elements</a></li>
                    <?php echo $admin_menu ?>
                    <?php echo $writer_page ?>
                    </ul>
                </nav>
        
                <!-- Section -->
                <section>
                    <header class="major">
                    <h2>We'd love to hear from you!</h2>
                    </header>
                    <p>
                      Whether you have questions about features, trials, pricing, need a demo or anything else, our team is ready to hear all your questions!
                    </p>
                    <ul class="contact">
                    <li class="icon solid fa-envelope">
                        <a href="#">information@untitled.tld</a>
                    </li>
                    <li class="icon solid fa-phone">0541282099</li>
                    <li class="icon solid fa-home">
                        Ashesi University <br />
                        1 University Ave, Berekuso
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
    
    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Main -->
      <div id="main">
        <div class="inner">
          <!-- Header -->
            <?php
              require_once '../classes/Header.php';
              $header = new Header();
              echo $header->get_html();
            ?>
          <!-- Content -->
          <section>
            <header class="major">
              <h1>Finance</h1>
            </header>
            <div class="posts">
              <?php
                  require_once '../controllers/article_controller.php';
                  echo create_new_article(
                     '#', 
                     '../images/article_images/ken.jpg', 
                     'Pay Up!', 
                     'Ghana’s finance minister laid out plans to slash the budget deficit, 
                     boost economic growth and make the nation’s public finances more sustainable to regain investor confidence.',
                     './story.html'
                    ); 
                  
                  echo create_new_article(
                     '#', 
                     '../images/article_images/ecowas.png', 
                     'Pay Up!', 
                     ' With the exception of Mali and Guinea which did not have any representative at the meeting due to their suspension from the regional body over military coup detat,
                     the meeting was attended by the rest of the ECOWAS countries, as well as Directors-General of Customs agencies from 13 of the 15 member states.',
                     './story.html'
                  );
                  echo create_new_article(
                    '#', 
                    '../images/article_images/aa.jpg', 
                    'Pay Up!', 
                    'Lemonade Finance, a cross-border app which allows Africans in the diaspora to send and receive money from their home country,
                    is now available to Ghanaians in the U.K.',
                    './story.html'
                 )
              ?>
            </div>
          </section>
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
