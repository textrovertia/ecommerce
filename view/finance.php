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
                  require_once '../controllers/article_controller.php';
                  echo create_new_article(
                     '#', 
                     '../images/girl_brown.jpg', 
                     'Pay Up!', 
                     'Aenean ornare velit lacus, ac varius enim lorem ullamcorper
                     dolore. Proin aliquam facilisis ante interdum. Sed nulla amet
                     lorem feugiat tempus aliquam.',
                     './story.html'
                    ); 
                  
                  echo create_new_article(
                     '#', 
                     '../images/girl_brown.jpg', 
                     'Pay Up!', 
                     'Aenean ornare velit lacus, ac varius enim lorem ullamcorper
                     dolore. Proin aliquam facilisis ante interdum. Sed nulla amet
                     lorem feugiat tempus aliquam.',
                     './story.html'
                  );
                  echo create_new_article(
                    '#', 
                    '../images/girl_brown.jpg', 
                    'Pay Up!', 
                    'Aenean ornare velit lacus, ac varius enim lorem ullamcorper
                    dolore. Proin aliquam facilisis ante interdum. Sed nulla amet
                    lorem feugiat tempus aliquam.',
                    './story.html'
                 )
              ?>

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
