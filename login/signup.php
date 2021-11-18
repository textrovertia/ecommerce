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

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
      integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7"
      crossorigin="anonymous"
    />

    <!-- Framework CSS -->
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/login.css" />

    <link
      rel="shortcut icon"
      href="../images/Logo Icon.ico"
      type="image/x-icon"
    />

  <title>Sign Up</title>
  </head>
  <body>
    <div class="container-fluid text">
      <div class="content row my-auto">
        <div class="left-half col-md-6 mx-auto my-auto">
          <img src="../images/Logo.png" alt="Logo" />
        </div>

        <div class="right-half col-md-6 mx-auto my-auto">
          <div class="container ">
            <header class="major">
              <h2>Sign Up</h2>
            </header>

            <form action="../login/registerprocess.php" method="post" id="login-form">
              
                <!-- Email -->
                <div class="form-item">
                  <label for="login"><h3>Email</h3></label>
                  <input class="input" id="email" name="email" />
                  <br>
                  <span id='email-message'></span>
                </div>
                <br />

                <!-- Username -->
                <div class="form-item">
                  <label for="login"><h3>Username</h3></label>
                  <input class="input" id="username" name="username" />
                </div>
                <br />

                <div class="form-item">
                  <label for="login"><h3>Class</h3></label>
                  <input class="input" id="class" name="class" />
                </div>
                <br />

                <div class="form-item">
                  <label for="login"><h3>Contact Number</h3></label>
                  <input class="input" id="number" name="number" />
                </div>
                <br />

                <!-- Account Type -->

                <div class="form-item col-12">
                <label for="account-type"><h3>Account Type</h3></label>
                  <select name="account-type" class='input' id="account-type">
                    <option value=""> Select User Type </option>
                    <option value="1">Reader</option>
                    <option value="2">Writer</option>
                  </select>
                </div>
                <br />


                <!-- Password -->
                <div class="form-item">
                  <label for="password"><h3>Password</h3></label>
                  <input
                    class="input"
                    id="password"
                    type="password"
                    name="password"
                  />
                </div>
                <br />

                <!-- Repeat Password -->
                <div class="form-item">
                  <label for="password"><h3>Repeat Password</h3></label>
                  <input
                    class="input"
                    id="repeat-password"
                    type="password"
                    name="repeat-password"
                  />
                </div>

                <br>
                <!-- <a href="../functionalities/payment.php"> -->
                <input type="submit" value="Sign Up" name="signupButton"/>

            </div>

            <br />
            <br />


          </form>
          <div class="p">
            Already have an account? Log in
            <span> <a href="./login.php">here</a> </span>
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

<?php
    // require '../settings/core.php';
   // check_email("This email already exists");
  
?>

