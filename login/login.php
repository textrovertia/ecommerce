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

    <title>Login</title>
    <link
      rel="shortcut icon"
      href="../images/Logo Icon.ico"
      type="image/x-icon"
    />
  </head>
  <body>
    <div class="container-fluid text">
      <div class="content row my-auto">
        <div class="left-half col-md-6 mx-auto my-auto">
          <img src="../images/Logo.png" alt="Logo" />
        </div>

        <div class="right-half col-md-6 mx-auto my-auto">
          <header class="major">
            <h2>Login</h2>
          </header>
          <form action="./loginprocess.php" method="post" id="log-form">
            <!-- Username -->
            <div class="form-item">
              <label for="login"><h3>Email</h3></label>
              <input class="input" id="logemail" name="email" />
              <br>
              <span id="logemail-message"></span>
            </div>

            <br />
            <!-- Password -->
            <div class="form-item">
              <label for="password"><h3>Password</h3></label>
              <input
                class="input"
                id="logpassword"
                type="password"
                name="pass"
                required
              />

              <br>
              <span id="logpass-message"></span>
            </div>

            <br />
            <br />

            <input type="submit" value="Login" name='login' required/>
            <br>
              <span id="logerror-message"></span>
          </form>
          <div class="p">
            Don't have an account? Sign up
            <span> <a href="./signup.php">here</a> </span>
          </div>
        </div>
      </div>
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
     <!-- jQuery -->
   <script 
        src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous"
    ></script>

    <script src="../assets/js/register.js"></script>
  </body>
</html>
