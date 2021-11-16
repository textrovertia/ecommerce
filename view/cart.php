<?php
include('../controllers/cart_controller.php');
// include('../Login/core.php');
session_start();
$id = $_SESSION['customer_id'];
$cart = select_all_in_cart_controller();

// echo $id;

// var_dump($cart);
// return;

?>