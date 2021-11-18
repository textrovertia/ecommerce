<?php
    require '../controllers/customer_controller.php';
    require '../settings/core.php';
    
    if (isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['pass'];
    
        $data = select_one_customer_controller($email);
        if (!$data){
            $_SESSION['email_password_set'] = true; 
            echo 'email does not exist';
            // header('Location: ./login.php');
        }else{
            $hash = $data['customer_pass'];
            print('done');
            $authenticated = password_verify($password, $hash);
        
            if($authenticated ){
                $_SESSION['customer_id'] = $data['customer_id'];
                $_SESSION['customer_email'] = $data['customer_email'];
                $_SESSION['user_role'] = $data['user_role'];
                header('Location: ../functionalities/payment.php');
            }else{
                $_SESSION['email_password_set'] = true; 
                echo 'email does not exist';
                header('Location: ./login.php');
            }
        }
    
       
    }

?>