<?php
session_start();
// require('../Login/core.php');
require('../controllers/cart_controller.php');



$id = $_GET['cartID'];
$customer_id = $_SESSION['user_id'];
$customer_IP = $_SERVER['REMOTE_ADDR'];
$qty = 1;

$result = add_to_cart_controller($id, $customer_id, $customer_IP, $qty);

if($result == true){
    header("Location: ../View/cart.php");
}
else{
    echo "Could not add to cart";
}
?>