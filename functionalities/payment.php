

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- Framework CSS -->
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/login.css" />

    <title>Subscription</title>
    <link
      rel="shortcut icon"
      href="../images/Logo Icon.ico"
      type="image/x-icon"
    />
  </head>
  <body>
      <div class="container">
        
    <header class="major" style="text-align: center;">
        <h1>Student Friendly Packages!</h1>
    </header>


        <div class="container mx-auto" style="text-align: center;">
          <div class="row" style="text-align: center;">
            <div class="col-md-3">
              <div class="card text-center border-primary mb-3" style="width: 18rem;">
                <img class="card-img-top mx-auto" style="width: 100px; height: 100px;" src="../images/weekly.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><b>Weekly</b><br>₵10/wk <br>Enjoy access to any news item of your choice. Limited to one device.</p>
                </div>
              </div>
            </div>


            <div class="col-md-3">
              <div class="card text-center border-primary mb-3" style="width: 18rem;">
                <img class="card-img-top mx-auto" src="../images/calendar.png" style="width: 100px; height: 100px;" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><b>Montly</b><br>₵35/month <br>Enjoy access to any news item of your choice. Limit is five devices.</p>
                </div>
              </div>
            </div>


            <div class="col-md-3">
              <div class="card text-center border-primary mb-3" style="width: 18rem;">
                <img class="card-img-top mx-auto" src="../images/yearly.png" style="width: 100px; height: 100px;" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><b>Yearly</b><br>₵140/year <br>Enjoy access to any news item of your choice. Unlimited Devices.</p>
                </div>
              </div>
            </div>
          </div>   
              
        </div>
        


    <br><br>


    

<form method="post" action="../view/cart.php">
    <div class="row gtr-uniform">
      <div class="col-6 col-12-xsmall">
        <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
      </div>

      <div class="col-6 col-12-xsmall">
        <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
      </div>

      <!-- Break -->


      <div class="col-12">
        <select class="form-select" name="demo-category" id="demo-category">
          <option selected>- Payment Options -</option>
          <option value="1">Weekly</option>
          <option value="2">Monthly</option>
          <option value="3">Yearly</option>
        </select>
      </div>
      <br>

    </div>

    <br>
    <!-- Break -->
    <div class="col-6 col-12-small">
      <input type="checkbox" id="demo-copy" name="demo-copy">
      <label for="demo-copy">Email me a copy</label>
    </div>
    <div class="col-6 col-12-small">
      <input type="checkbox" id="demo-human" name="demo-human" checked>
      <label for="demo-human">I am a human</label>
    </div>
    <!-- Break -->
    <div class="col-12">
      <ul class="actions">
        <li><input type="submit" value="Subscribe" class="primary" /></li>
        <li><input type="reset" value="Reset" /></li>
      </ul>
    </div>
  
</form>

    
      </div>

    <!-- Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


<form>


