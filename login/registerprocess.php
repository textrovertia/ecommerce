<?php
require '../settings/core.php';
require('../controllers/customer_controller.php');

if(isset($_POST['signupButton'])){
    // retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $number = $_POST['number'];
    $class = $_POST['class'];
    $user_role = $_POST['account-type'];

    // Check if email already exists 
    if(select_one_customer_controller($email)){
        // $_SESSION['email_exists'] = 'Email already exists'; 
        header('Location: ./signup.php');
    }else{

        //call the add customer controller
        $result = add_customer_controller($username, $email, $password, $class, $number, $user_role);

        if($result) {
            header("Location: ../functionalities/payment.php");
            // echo $result;
        }
        else {
            $_SESSION['sign_up_error'] = 'We were unable to register you at this moment. Please try again later';
            header('Location: ./signup.php');
            // echo $result;
        }
}
}


?>