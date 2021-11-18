<?php 
      require_once '../settings/core.php';
      $login_menu = login_menu('../login/login.php', './login/logout.php', '../login/signup.php');
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
    <title>Lifestyle</title>
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
          <header id="header">
            <a href="../index.html" class="logo"
              ><strong>Editorial</strong> by HTML5 UP</a
            >
            <ul class="icons">
              <li>
                <a href="#" class="icon brands fa-twitter"
                  ><span class="label">Twitter</span></a
                >
              </li>
              <li>
                <a href="#" class="icon brands fa-facebook-f"
                  ><span class="label">Facebook</span></a
                >
              </li>
              <li>
                <a href="#" class="icon brands fa-snapchat-ghost"
                  ><span class="label">Snapchat</span></a
                >
              </li>
              <li>
                <a href="#" class="icon brands fa-instagram"
                  ><span class="label">Instagram</span></a
                >
              </li>
              <li>
                <a href="#" class="icon brands fa-medium-m"
                  ><span class="label">Medium</span></a
                >
              </li>
            </ul>
          </header>

          <!-- Content -->
          <section>
            <header class="major">
              <h1>Lifestyle</h1>
            </header>
            <div class="posts">
              <article>
                <a href="../login/signup.php" class="image"
                  ><img src="../images/article_images/entrepreneur.jpeg" alt=""
                /></a>
                <h3>3 Lifestyle Practices To Become A Healthier Entrepreneur</h3>
                <p>
                By Cooper Harris, Founder of Klickly. Google's "Young Innovator" and L'Oréal's "Digital Woman of the Year" nominee. Featured in Forbes, Inc. and Mashable.
                </p>
                <ul class="actions">
                  <li><a href="../login/signup.php" class="button">More</a></li>
                </ul>
              </article>
              <article>
                <a href="../login/signup.php" class="image"
                  ><img src="../images/article_images/students.jpg" alt=""
                /></a>
                <h3>Kenosha Lifestyle and Retirement Expo helps seniors plan for the future</h3>
                <p>
                Among the best things about retirement is looking ahead to what lies beyond going to work every day.

                Helping adults plan for that future is what took place at the Lifestyle & Retirement Expo,
                 held Tuesday at the Parkway Chateau, 12304 75th St.
                </p>
                <ul class="actions">
                  <li><a href="../login/signup.php" class="button">More</a></li>
                </ul>
              </article>
              <article>
                <a href="../login/signup.php" class="image"
                  ><img src="../images/article_images/estate.jpeg" alt=""
                /></a>
                <h3>Sprawling $30-Million Estate In The Heart Of Colorado Embraces The Outdoor Lifestyle</h3>
                <p>
                This 145-acre estate property outside Edwards, Colorado, is all about enjoying the great outdoors.

                The aspen-dotted rolling hills contain 10 miles of custom trails designed for hiking, 
                snowshoeing and snowmobiling. Along the paths are four picnic and play areas to rest and take in the scenery.
                 One such stop features a wooden drawbridge and a timber castle.
                </p>
                <ul class="actions">
                  <li><a href="../login/signup.php" class="button">More</a></li>
                </ul>
              </article>
              <article>
                <a href="../login/signup.php" class="image"
                  ><img src="../images/article_images/obesity.jpg" alt=""
                /></a>
                <h3>Diabesity: The worse by-product of an unhealthy lifestyle</h3>
                <p>
                Everyone has heard about diabetes and obesity. But have you heard about Diabesity? 
                Diabesity is a condition in which the person is suffering from both diabetes and obesity together. 
                We know that both diabetes and obesity are deadly; they increase the chances of heart disease, stroke, kidney disease etc. 
                Now imagine when they both happen together. How drastically they will eat up your body and make your life disease-some. 
                The likelihood of complication gets magnified exponentially and it can drastically impact the quality and quantity of life.
                </p>
                <ul class="actions">
                  <li><a href="../login/signup.php" class="button">More</a></li>
                </ul>
              </article>
            </div>
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
                        <span class="opener">Topics</span>
                        <ul>
                        <li><a href="finance.php">Finance</a></li>
                        <li><a href="tech.php">Tech</a></li>
                        <li><a href="lifestyle.php">Lifestyle</a></li>
                        </ul>
                    </li>
                  
                    <?php echo $login_menu ?>
                    <li><a href="login/signup.php">Sign Up</a></li>
                    <li><a href="view/elements.php">Elements</a></li>
                    <?php echo $admin_menu ?>
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

    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>
  </body>
</html>
