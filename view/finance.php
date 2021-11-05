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
          <!-- Content -->
          <section>
            <header class="major">
              <h1>Finance</h1>
            </header>
            <div class="posts">
              <?php
                   require_once '../model/article.php';
                   $header = new Article(
                     '#', 
                     '../images/girl_brown.jpg', 
                     'Pay Up!', 
                     'Aenean ornare velit lacus, ac varius enim lorem ullamcorper
                     dolore. Proin aliquam facilisis ante interdum. Sed nulla amet
                     lorem feugiat tempus aliquam.',
                     './story.html'
                    );
                   echo $header->get_html();
              ?>
              <article>
                <a href="#" class="image"
                  ><img src="../images/girl_brown.jpg" alt=""
                /></a>
                <h3>Students refusing to pay student loans</h3>
                <p>
                  Aenean ornare velit lacus, ac varius enim lorem ullamcorper
                  dolore. Proin aliquam facilisis ante interdum. Sed nulla amet
                  lorem feugiat tempus aliquam.
                </p>
                <ul class="actions">
                  <li><a href="./story.html" class="button">More</a></li>
                </ul>
              </article>
              <article>
                <a href="#" class="image"
                  ><img src="../images/plane.jpg" alt=""
                /></a>
                <h3>Air industry in trouble</h3>
                <p>
                  Aenean ornare velit lacus, ac varius enim lorem ullamcorper
                  dolore. Proin aliquam facilisis ante interdum. Sed nulla amet
                  lorem feugiat tempus aliquam.
                </p>
                <ul class="actions">
                  <li><a href="#" class="button">More</a></li>
                </ul>
              </article>
              <article>
                <a href="#" class="image"
                  ><img src="../images/pic03.jpg" alt=""
                /></a>
                <h3>Tempus ullamcorper</h3>
                <p>
                  Aenean ornare velit lacus, ac varius enim lorem ullamcorper
                  dolore. Proin aliquam facilisis ante interdum. Sed nulla amet
                  lorem feugiat tempus aliquam.
                </p>
                <ul class="actions">
                  <li><a href="#" class="button">More</a></li>
                </ul>
              </article>
              <article>
                <a href="#" class="image"
                  ><img src="../images/pic04.jpg" alt=""
                /></a>
                <h3>Sed etiam facilis</h3>
                <p>
                  Aenean ornare velit lacus, ac varius enim lorem ullamcorper
                  dolore. Proin aliquam facilisis ante interdum. Sed nulla amet
                  lorem feugiat tempus aliquam.
                </p>
                <ul class="actions">
                  <li><a href="#" class="button">More</a></li>
                </ul>
              </article>
            </div>
          </section>
        </div>
      </div>

      <!-- Sidebar -->
      <?php require_once '../model/menu.php';
      $menu = new Menu('lifestyle');
      echo $menu->get_html(); ?>
    </div>

    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>
  </body>
</html>
