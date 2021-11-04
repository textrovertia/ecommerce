<?php
require('../controllers/customer_controller.php');

if(isset($_POST['signupButton'])){
    // retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $number = $_POST['number'];
    $class = $_POST['class'];
    $user_role = 2;

    //call the add customer controller
    $result = add_customer_controller($username, $email, $password, $class, $number, $user_role);

    if($result == true) {
        header("Location: ../functionalities/payment.php");
        // echo $result;
    }
    else {
        echo "Customer cannot be added";
        // echo $result;
    }
}


?>