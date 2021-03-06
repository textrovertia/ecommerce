  <!-- Sidebar -->
<?php 
    require_once '../settings/core.php';
    require_once '../controllers/article_controller.php';
    require_once '../controllers/new_article_controller.php';
    
    // Check login and permission
    check_login();
    if( check_permission() != 2  && check_permission() != 3){
        header('Location: ../index.php');   
    }
    
    //   require_once '../controllers/';
    $login_menu = login_menu('../login/login.php', '../login/logout.php', '../login/signup.php');
    $admin_menu = admin_page('../admin/admin.php');
    $writer_page = writer_page('./writer.php');

    $user_id = $_SESSION['customer_id'];
   
    $articles = select_writers_articles_controller($user_id);
   
      
?>
<!DOCTYPE html>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Writer's Corner</title>
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

    <style>
        .button-div{
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5em;
        }
    </style>
  </head>
  <body class="is-preload">
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
              <h1>Articles Written</h1>
            </header>
            <div class="posts">
              <?php
                foreach($articles as $article){
              ?> 
                  <article>
                    <a href="" class="image"
                    ><img src="../images/article_images/<?php echo $article['article_image'] ?>" alt="Article image"
                    /></a>
                    <h3>
                    <?php echo $article['article_title'] ?>
                    </h3>
                    <p>
                    <?php echo $article['article_text'] ?>
                    </p>
                    <ul class="actions">
                    <li><a href="$buttonlink" class="button primary">Edit</a></li>
                    <li><a href="../actions/delete_article.php?id=<?php echo $article['article_id'] ?>&location=writer" class="button">Delete</a></li>
                    </ul>
                </article>     
                <?php    
                }
                //  foreach item in articles, where the writer 
                                
                                ?>
    
             </div> 
             <br>
                <hr>
             <br>

             <!-- Add New Article -->
             <section id="new-article">
             <header class="major">
              <h2>Add New Article</h2>
            </header>
                <form action="../actions/add_article.php" method="post" enctype='multipart/form-data'>
                    <!-- Article Title -->
                    <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                      <input
                        type="text"
                        name="title"
                        id="title"
                        placeholder="Article Title"
                      />
                    </div>
                    
                    <!-- Category -->
                    <div class="col-6 col-12-xsmall">
                      <select name="category" id="category" required>
                        <option disabled selected>- Category -</option>
                        <option value="finance">Finance</option>
                        <option value="lifestyle">Lifestyle</option>
                        <option value="technology">Technology</option>
                        
                      </select>
                    </div>

                    
                    <!-- Article Text -->
                    <div class="col-12">
                      <textarea
                        name="text"
                        id="text"
                        placeholder="Enter your article body"
                        rows="6"
                      ></textarea>
                    </div>

                    <!-- Image -->
                    <div class="">
                    <input name='image' type="file" accept="image/png, image/gif, image/jpeg" required>
                    </div>

                    <!-- Submit -->
                    <div class="col-12">
                          <input
                            type="submit"
                            value="Submit Article"
                            class="primary"
                            name='submitArticle'
                          />
                    </div>
                  </div>

            </form>
            </section>

            
            
    

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
                        <li><a href="../view/finance.php">Finance</a></li>
                        <li><a href="../view/tech.php">Tech</a></li>
                        <li><a href="../view/lifestyle.php">Lifestyle</a></li>
                        </ul>
                    </li>
                  
                    <?php echo $login_menu ?>
  
                    <li><a href="../view/elements.php">Elements</a></li>
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


    <!-- Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/search.js"></script>
  </body>
</html>
