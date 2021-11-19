<?php
  require '../settings/core.php';
  require '../controllers/order_controller.php'; 
  check_login();
  if( check_permission() != 3){
      header('Location: ../index.php');   
  }
  $orders = select_all_orders_controller();
  $articles = select_all_articles_controller(); 
  
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../assets/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

        <style>
          body{
            font-family: "Poppins";
            
          }
          header.major > :last-child{
            font-family: "Roboto Slab", serif;
            border-bottom: solid 3px #f56a6a;
            display: inline-block;
            margin: 0 0 0.7em 0;
            padding: 0 0.75em 0.5em 0; 
          }

          .navbar-brand{
            font-family: "Roboto Slab", serif;
          }

          .article-text{
            font-size: 0.7rem;
          }

          #hidden{
            display: none; 
          }

          .fas{
            color: #f56a6a !important
          }
        </style>
    </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-light bg-light">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="#">Kaseɛbo</a>
      <!-- Sidebar Toggle-->
      <button
        class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
        id="sidebarToggle"
        href="#!"
      >
        <i style='color: #f56a6a ' class="fas fa-bars"></i>
      </button>
      <!-- Navbar Search-->
      <form
        class="
          d-none d-md-inline-block
          form-inline
          ms-auto
          me-0 me-md-3
          my-2 my-md-0
        "
      >
        <div class="input-group">
          <input
            class="form-control"
            type="text"
            placeholder="Search"
            aria-label="Search for..."
            aria-describedby="btnNavbarSearch"
          />
          <button class="btn" id="btnNavbarSearch" type="button" style='background: #eff1f2'>
            <i style ='color: #f56a6a' class="fas fa-search"></i>
          </button>
        </div>
      </form>
      <!-- Navbar-->
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            id="navbarDropdown"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            ><i style ='color: #f56a6a' class="fas fa-user fa-fw"></i
          ></a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdown"
          >
      
            <li><a class="dropdown-item" href="../login/logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">
              <div class="sb-sidenav-menu-heading">Core</div>
              <a class="nav-link" href="#">
                <div class="sb-nav-link-icon">
                  <i style ='color: #f56a6a' class="fas fa-tachometer-alt"></i>
                </div>
                Users
              </a>
              <div class="sb-sidenav-menu-heading">Writer Information</div>
              <a
                class="nav-link collapsed"
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#collapseLayouts"
                aria-expanded="false"
                aria-controls="collapseLayouts"
              >
                <div class="sb-nav-link-icon">
                  <i style ='color: #f56a6a' class="fas fa-columns"></i>
                </div>
                Graphs
                <div class="sb-sidenav-collapse-arrow">
                  <i style ='color: #f56a6a' class="fas fa-angle-down"></i>
                </div>
              </a>
              <div
                class="collapse"
                id="collapseLayouts"
                aria-labelledby="headingOne"
                data-bs-parent="#sidenavAccordion"
              >
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="layout-static.html"
                    >Static Navigation</a
                  >
                  <a class="nav-link" href="layout-sidenav-light.html"
                    >Light Sidenav</a
                  >
                </nav>
              </div>
              <a
                class="nav-link collapsed"
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#collapsePages"
                aria-expanded="false"
                aria-controls="collapsePages"
              >
                <div class="sb-nav-link-icon">
                  <i style ='color: #f56a6a' class="fas fa-book-open"></i>
                </div>
                Articles
                <div class="sb-sidenav-collapse-arrow">
                  <i style ='color: #f56a6a' class="fas fa-angle-down"></i>
                </div>
              </a>
              <div
                class="collapse"
                id="collapsePages"
                aria-labelledby="headingTwo"
                data-bs-parent="#sidenavAccordion"
              >
                <nav
                  class="sb-sidenav-menu-nested nav accordion"
                  id="sidenavAccordionPages"
                >
                  <a
                    class="nav-link collapsed"
                    href="#"
                    data-bs-toggle="collapse"
                    data-bs-target="#pagesCollapseAuth"
                    aria-expanded="false"
                    aria-controls="pagesCollapseAuth"
                  >
                    Authentication
                    <div class="sb-sidenav-collapse-arrow">
                      <i style ='color: #f56a6a' class="fas fa-angle-down"></i>
                    </div>
                  </a>
                  <div
                    class="collapse"
                    id="pagesCollapseAuth"
                    aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordionPages"
                  >
                    <nav class="sb-sidenav-menu-nested nav">
                      <a class="nav-link" href="login.php">Login</a>
                      <a class="nav-link" href="register.php">Register</a>
                      <a class="nav-link" href="password.php"
                        >Forgot Password</a
                      >
                    </nav>
                  </div>
                  <a
                    class="nav-link collapsed"
                    href="#"
                    data-bs-toggle="collapse"
                    data-bs-target="#pagesCollapseError"
                    aria-expanded="false"
                    aria-controls="pagesCollapseError"
                  >
                    Error
                    <div class="sb-sidenav-collapse-arrow">
                      <i style ='color: #f56a6a' class="fas fa-angle-down"></i>
                    </div>
                  </a>
                  <div
                    class="collapse"
                    id="pagesCollapseError"
                    aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordionPages"
                  >
                    <nav class="sb-sidenav-menu-nested nav">
                      <a class="nav-link" href="401.html">401 Page</a>
                      <a class="nav-link" href="404.html">404 Page</a>
                      <a class="nav-link" href="500.html">500 Page</a>
                    </nav>
                  </div>
                </nav>
              </div>
              <div class="sb-sidenav-menu-heading">Addons</div>
              <a class="nav-link" href="charts.html">
                <div class="sb-nav-link-icon">
                  <i style ='color: #f56a6a' class="fas fa-chart-area"></i>
                </div>
                Charts
              </a>
              <a class="nav-link" href="tables.html">
                <div class="sb-nav-link-icon"><i style ='color: #f56a6a' class="fas fa-table"></i></div>
                Tables

            
              </a>
            </div>
          </div>
          <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
              <?php echo select_one_customer_controller($_SESSION['customer_id'])['customer_name'] ?>
              
          </div>
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
          <header class="major">
              <h3 class='mt-4'>Users</h3>
            </header> 
        
            <div class="row">
              <div class="col-xl-3 col-sm-6">
                <div class="card text-white mb-4"  style='background-color:#f56a6a'>
                  <div class="card-body">
                  <h5>Total Readers:</h5>
                    <span style='font-size: 3rem'>
                    <?php echo total_readers_controllers()['readers'] ?>
                  </span>
                  </div>
                 
                </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                <div class="card text-white mb-4"  style='background-color:#f56a6a'>
                  <div class="card-body">
                  <h5>Total Writers:</h5>
                    <span style='font-size: 3rem'>
                    <?php echo total_writers_controllers()['writers'];
  
                        
                    ?>
                  </span>
                  </div>
                
                </div>
              </div>

              <!-- Total Articles -->
              <div class="col-xl-3 col-sm-6">
                <div class="card text-white mb-4"  style='background-color:#f56a6a'>
                  <div class="card-body">
                  <h5>Articles Written:</h5>
                    <span style='font-size: 3rem'>
                    <?php echo total_articles_controller()['articles'];
                    ?>
                  </span>
                  </div>
                
                </div>
              </div>
             
            </div>

            <header class="major">
              <h3 class='mt-4'>Graphs</h3>
            </header>
            
            <div class="row">
              <div class="col-xl-6">
                <div class="card mb-4">
                  <div class="card-header">
                    <i style ='color: #f56a6a' class="fas fa-chart-area me-1"></i>
                    Most Popular Categories (by Articles Written)
                  </div>
                  <div class="card-body">
                    <canvas id="myPieChart" width="100%" height="40"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="card mb-4">
                  <div class="card-header">
                    <i style ='color: #f56a6a' class="fas fa-chart-bar me-1"></i>
                    Bar Chart Example
                  </div>
                  <div class="card-body">
                    <canvas id="myBarChart" width="100%" height="40"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Table -->
            <header class="major">
              <h3 class='mt-4'>Orders</h3>
            </header>
        
            <div class="card mb-4">
              <div class="card-header">
                <i style ='color: #f56a6a' class="fas fa-table me-1"></i>
                Orders
              </div>
              <div class="card-body">
                <table id="datatablesSimple">
                  <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Customer</th>
                      <th>Invoice</th>
                      <th>Order Date</th>
                      <th>Order Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Order ID</th>
                      <th>Customer Email</th>
                      <th>Invoice</th>
                      <th>Order Date</th>
                      <th>Order Status</th>
            
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                        foreach($orders as $order){
                          $customer = select_one_customer_controller($order['customer_id'])['customer_email']
                     ?>     
                      
                      <tr>
                      <td><?php echo $order['order_id'] ?></td>
                      <td><?php echo $customer ?></td>
                      <td><?php echo $order['invoice_no'] ?></td>
                      <td><?php echo $order['order_date'] ?></td>
                      <td><?php echo $order['order_status'] ?></td>
                      <td> <i class="fas fa-edit "></i></td>
                      <td>  <i class="fas fa-trash-alt "></i></td>
                    </tr>

                     <?php 
                        }
                    ?>
                    
                  </tbody>
                </table>
              </div>
            </div>

            <!-- Articles -->
            <header class="major">
              <h3>Articles</h3>
            </header>
            <div class="row">
              
              <?php  
                foreach($articles as $article){
                ?>
                <div class="col-xl-3 col-md-4 col-sm-6">
                <div class="card text-white mb-4" style='background-color:#f56a6a'>
                <img class="card-img-top" src="../images/article_images/<?php echo $article['article_image'] ?>" alt="Card image cap">
                  <div class="card-body">
                  <h5 class="card-title"><?php echo $article['article_title'] ?></h5>
                  <h6>Writer: <?php echo $article['writer_id'] ?> </h6>
                  <p class='article-text'>
                  <?php echo $article['article_text'] ?>
                  </p>
                  </div>
                  <div
                    class="
                      card-footer
                     d-flex
                      align-items-center
                      justify-content-around
                    "
                  >

                 <!-- Edit Article -->
                  <a href="../actions/delete_article.php?id=''">
                    <i style='color:white' class="fas fa-edit "></i>
                  </a>
                  <!-- Delete button -->
                  <a href="../actions/delete_article.php?id=<?php echo $article['article_id'] ?>&location=admin">
                    <i style='color:white' class="fas fa-trash-alt "></i>
                  </a>
                  </div>
                </div>
              </div>
              <?php
                }
              ?>
              
            </div>
           
          </div>

          <div id="hidden">
                <div id="finance_articles">
                  <?php echo total_articles_on_topic_controller('finance')['articles'] ?>
                </div>
                <div id="lifestyle_articles">
                  <?php echo total_articles_on_topic_controller('lifestyle')['articles'] ?>
                </div>
                <div id="tech_articles">
                  <?php echo total_articles_on_topic_controller('technology')['articles'] ?>
                </div>
          </div>
        </main>

        <!-- Footer -->
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div
              class="d-flex align-items-center justify-content-between small"
            >
              <div class="text-muted">Copyright &copy; Your Website 2021</div>
              <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
              </div>
            </div>
          </div>
        </footer>

      </div>
    </div>
    <!-- Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>

     <!-- jQuery -->
     <script 
        src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous"
    ></script>

    <!-- Charts -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
      crossorigin="anonymous"
    ></script>

    <!-- Javascript -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/piechart.js"></script>
    <script src="../assets/js/chart-bar-demo.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"
      crossorigin="anonymous"
    ></script>

    <script src="../assets/js/datatables-simple-demo.js"></script>

  
  </body>
</html>
