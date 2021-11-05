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
              require_once '../model/header.php';
              $header = new Header();
              echo $header->get_html();
            ?>

          <!-- Banner -->
          <section id="banner">
            <div class="content">
              <header>
                <h1>Crypto makes a comeback!<br /></h1>
                <p>Story by Princess Asante</p>
              </header>
              <p>
                Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin
                aliquam facilisis ante interdum congue. Integer mollis, nisl
                amet convallis, porttitor magna ullamcorper, amet egestas
                mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id
                euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor
                sit nullam.
              </p>
              <ul class="actions">
                <li><a href="login/signup.php" class="button big">Learn More</a></li>
              </ul>
            </div>
            <span class="image object">
              <img src="images/crypto.jpg" alt="" />
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
                  ><img src="images/girl_brown.jpg" alt=""
                /></a>
                <h3>Students refusing to pay student loans</h3>
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
                  ><img src="images/building.jpg" alt=""
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

          <!-- Section Latest Stories-->
          <section>
            <header class="major">
              <h2>Finance</h2>
            </header>
            <div class="posts">
              <article>
                <a href="#" class="image"
                  ><img src="images/girl_brown.jpg" alt=""
                /></a>
                <h3>Students refusing to pay student loans</h3>
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
              <li><a href="index.html">Homepage</a></li>
              <li><a href="./view/elements.html">Elements</a></li>
              <li>
                <span class="opener">Topics</span>
                <ul>
                  <li><a href="./view/finance.html">Finance</a></li>
                  <li><a href="./view/tech.htm">Tech</a></li>
                  <li><a href="./view/lifestyle.htm">Lifestyle</a></li>
                </ul>
              </li>
              <li><a href="./login/login.php">Log In</a></li>
              <li><a href="./login/../login/signup.php">Sign Up</a></li>
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
                <a href="#">princess.asante@ashesi.edu.gh</a>
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
              &copy; ECommerce 2020 Group 2. All rights reserved.
            </p>
          </footer>
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
