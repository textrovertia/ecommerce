  <!-- Sidebar -->
  <?php require_once './settings/core.php';
      $login_menu = login_menu('./login/login.php', './login/logout.php', '../login/signup.php');
      $admin_menu = admin_page('./admin/admin.php');
      $writer_page = writer_page('./view/writer.php')
   ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Kaseɛbo</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/index.css" />

    <link
      rel="shortcut icon"
      href="./images/Logo Icon.ico"
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
              require_once './classes/Header.php';
              $header = new Header();
              echo $header->get_html();
            ?>

          <!-- Banner -->
          <section id="banner">
            <div class="content">
              <header>
                <h1>2 Men Convicted of Killing Malcolm X Will Be Exonerated Decades Later<br /></h1>
                <p>Story by Princess Asante</p>
              </header>
              <p>
              The 1966 convictions of the men are expected to be thrown out after a lengthy investigation, validating long-held doubts about who killed the civil rights leader.
              Two of the men found guilty of the assassination of Malcolm X are expected to have their convictions thrown out on Thursday, 
              the Manhattan district attorney and lawyers for the two men said, rewriting the official history of one of the most notorious murders of the civil rights era.
              </p>
              <ul class="actions">
                <li><a href="login/signup.php" class="button big">Learn More</a></li>
              </ul>
            </div>
            <span class="image object">
              <img src="images/article_images/malcomx.jpg" alt="" />
            </span>
          </section>

          <!-- Section Latest Stories-->
          <section>
            <header class="major">
              <h2>Latest Stories</h2>
            </header>
            <div class="posts">
              <article>
                <a href="#" class="image"
                  ><img src="images/article_images/overdose.jpg.jpg" alt=""
                /></a>
                <h3>Overdose Deaths Reached Record High as the Pandemic Spread</h3>
                <p>
                More than 100,000 Americans died from drug overdoses in the yearlong period ending in April, government researchers said.
                Americans died of drug overdoses in record numbers as the pandemic spread across the country, federal researchers reported on Wednesday, 
                the result of lost access to treatment, rising mental health problems and wider availability of dangerously potent street drugs.
                </p>
                <ul class="actions">
                  <li><a href="login/signup.php" class="button">More</a></li>
                </ul>
              </article>
              <article>
                <a href="#" class="image"
                  ><img src="images/article_images/food.jpg" alt=""
                /></a>
                <h3>A Beginner’s Thanksgiving: 7 Recipes That Lighten the Workload</h3>
                <p>
                For first-time cooks, or anyone looking to simplify the holiday prep, this special menu minimizes effort and maximizes flavor.
                </p>
                <ul class="actions">
                  <li><a href="login/signup.php" class="button">More</a></li>
                </ul>
              </article>
              <article>
                <a href="#" class="image"
                  ><img src="images/article_images/house.jpg" alt=""
                /></a>
                <h3>House, Mostly Along Party Lines, Censures Gosar for Violent Video</h3>
                <p>
                The Arizona Republican is the first member of the House to be formally rebuked in more than a decade. He was also removed from two committees.

                </p>
                <ul class="actions">
                  <li><a href="login/signup.php" class="button">More</a></li>
                </ul>
              </article>
              <article>
                <a href="#" class="image"
                  ><img src="images/article_images/leather.jpg" alt=""
                /></a>
                <h3>
                  How Americans’ Appetite for Leather in Luxury SUVs Worsens Amazon Deforestation
                </h3>
                <p>
                  An examination of Brazil’s immense tannery industry shows how hides from illegally deforested ranches can easily reach the global marketplace. 
                  In the United States, much of the demand for Brazilian leather comes from automakers.
                </p>
                <ul class="actions">
                  <li><a href="login/signup.php" class="button">More</a></li>
                </ul>
              </article>
            </div>
          </section>

          <!-- Section Latest Stories-->
          <section>
            <header class="major">
              <h2>Finance</h2>
            </header>
            <div class="posts">
              <article>
                <a href="#" class="image"
                  ><img src="images/article_images/ken.jpg" alt=""
                /></a>
                <h3>Ghanaian Finance Minister Targets Lower Budget Deficit</h3>
                <p>
                Ghana’s finance minister laid out plans to slash the budget deficit, 
                boost economic growth and make the nation’s public finances more sustainable to regain investor confidence.
                </p>
                <ul class="actions">
                  <li><a href="login/signup.php" class="button">More</a></li>
                </ul>
              </article>
              <article>
                <a href="#" class="image"
                  ><img src="images/plane.jpg" alt=""
                /></a>
                <h3>Air industry in trouble</h3>
                <p>
                  Aenean ornare velit lacus, ac varius enim lorem ullamcorper
                  dolore. Proin aliquam facilisis ante interdum. Sed nulla amet
                  lorem feugiat tempus aliquam.
                </p>
                <ul class="actions">
                  <li><a href="login/signup.php" class="button">More</a></li>
                </ul>
              </article>
              <article>
                <a href="#" class="image"
                  ><img src="images/pic03.jpg" alt=""
                /></a>
                <h3>Tempus ullamcorper</h3>
                <p>
                  Aenean ornare velit lacus, ac varius enim lorem ullamcorper
                  dolore. Proin aliquam facilisis ante interdum. Sed nulla amet
                  lorem feugiat tempus aliquam.
                </p>
                <ul class="actions">
                  <li><a href="login/signup.php" class="button">More</a></li>
                </ul>
              </article>
              <article>
                <a href="#" class="image"
                  ><img src="images/pic04.jpg" alt=""
                /></a>
                <h3>Sed etiam facilis</h3>
                <p>
                  Aenean ornare velit lacus, ac varius enim lorem ullamcorper
                  dolore. Proin aliquam facilisis ante interdum. Sed nulla amet
                  lorem feugiat tempus aliquam.
                </p>
                <ul class="actions">
                  <li><a href="login/signup.php" class="button">More</a></li>
                </ul>
              </article>
            </div>
          </section>
        </div>
      </div>

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
                    <li><a href="index.php">Home</a></li>
                    <li>
                        <span class="opener">Topics</span>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
