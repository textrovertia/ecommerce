<?php
require('../classes/cart_class.php');

function add_to_cart_controller($id, $customer_id, $customer_IP, $qty){
    //create an instance of the cart class
    $cart_instance = new Cart();
    //call method from the class
    return $cart_instance->add_to_cart($id, $customer_id, $customer_IP, $qty);
}

function select_cart_item_controller($id){
    //create instance of cart class
    $cart_instance = new Cart();
    //call method from cart class
    return $cart_instance->select_cart_item($id);
}

function select_all_in_cart_controller($id){
    //create instance of cart class
    $cart_instance = new Cart();
    //call method from cart class
    return $cart_instance->select_all_in_cart($id);
}

function remove_from_cart_controller($id, $customer_IP){
    //create instance of cart class
    $cart_instance = new Cart();
    //call method from cart class
    return $cart_instance->remove_from_cart($id, $customer_IP);
}

function manage_cart_quantity_controller($id, $new_qty){
    //create instance of cart class
    $cart_instance = new Cart();
    //call method from cart class
    return $cart_instance->manage_cart_quantity($id, $new_qty);
}

function select_product_quantity_controller($id){
    //create instance of cart class
    $cart_instance = new Cart();
    //call method from cart class
    return $cart_instance->select_product_quantity($id);
}

function calculate_total_controller($id, $customer_IP){
    //create instance of cart class
    $cart_instance = new Cart();
    //call method from cart class
    return $cart_instance->calculate_total($id, $customer_IP);
}

function add_order_controller($customer_id, $invoice_no, $order_date, $order_status){
    //create instance of cart class
    $cart_instance = new Cart();
    //call method from cart class
    return $cart_instance->add_order($customer_id, $invoice_no, $order_date, $order_status);
}

function select_cart_controller($customer_id, $customer_IP){
    //create instance of cart class
    $cart_instance = new Cart();
    //call method from cart class
    return $cart_instance->select_cart($customer_id, $customer_IP);
}

function add_order_details_controller($result2, $prod_id, $qty){
    //create instance of cart class
    $cart_instance = new Cart();
    //call method from cart class
    return $cart_instance->add_order_details($result2, $prod_id, $qty);
}

function add_payment_controller($amount, $customer_id, $result2, $currency, $order_date){
    //create instance of cart class
    $cart_instance = new Cart();
    //call method from cart class
    return $cart_instance->add_payment($amount, $customer_id, $result2, $currency, $order_date);
}

function delete_cart_controller($customer_id, $customer_IP){
    //create instance of cart class
    $cart_instance = new Cart();
    //call method from cart class
    return $cart_instance->delete_cart($customer_id, $customer_IP);
}
?>