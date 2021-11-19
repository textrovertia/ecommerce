<?php 
      require_once '../settings/core.php';
      require_once '../controllers/new_article_controller.php';
      $login_menu = login_menu('../login/login.php', '../login/logout.php', '../login/signup.php');
      $admin_menu = admin_page('../admin/admin.php');
      $writer_page = writer_page('./writer.php');

      $articles = select_articles_by_category_controller('lifestyle');
     
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
            <a href="../index.php" class="logo"
              ><strong>Kase3bo</strong> by HTML5 UP</a
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

            <?php
            foreach($articles as $article){
            ?>
               <article>
                <a href="./story.php?id=<?php echo $article['article_id'] ?>" class="image"
                  ><img src="../images/article_images/<?php echo $article['article_image'] ?>" alt=""
                /></a>
                <h3><?php echo $article['article_title'] ?></h3>
                <p>
                <?php echo substr($article['article_text'], 0, 120).'...' ?>
                </p>
                <ul class="actions">
                  <li><a href="./story.php?id=<?php echo $article['article_id'] ?>" class="button">More</a></li>
                </ul>
              </article>

           

<?php
}
?>
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
                        <li><a href="./finance.php">Finance</a></li>
                        <li><a href="./tech.php">Tech</a></li>
                        <li><a href="./lifestyle.php">Lifestyle</a></li>
                        </ul>
                    </li>
                  
                    <?php echo $login_menu ?>
                    <!-- <li><a href="../login/signup.php">Sign Up</a></li> -->
                    <li><a href="../view/elements.php">Elements</a></li>
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
                      <a href="mailto:nanna.abankwah@ashesi.edu.gh" target='_blank'>kase3bo@gmail.com</a>
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
        