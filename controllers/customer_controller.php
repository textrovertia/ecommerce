<?php
require('../classes/customer_class.php');

function add_customer_controller($username, $email, $password, $class, $number, $user_role){
    //create an instance of the Customer class
    $customer_instance = new Customer();
    //call the method from the Customer class
    return $customer_instance->add_customer($username, $email, $password, $class, $number, $user_role);
}

function login_customer_controller($email){
    //create an instance of the Customer class
    $customer_instance = new Customer();
    //call the method from the Customer class
    return $customer_instance->login_customer($email);
}

function delete_customer_controller($id){
    //create an instance of the Customer class
    $customer_instance = new Customer();
    //call the method from the Customer class
    return $customer_instance->delete_one_customer($id);
}

function update_customer_controller($id, $username, $email, $password, $class, $number, $image, $user_role){
    //create an instance of the Customer class
    $customer_instance = new Customer();
    //call the method from the Customer class
    return $customer_instance->update_one_customer($id, $username, $email, $password, $class, $number, $image, $user_role);
}

function select_all_customers_controller(){
    // create an instance of the Customer class
    $customer_instance = new Customer();
    // call the method from the class
    return $customer_instance->select_all_customers();
}

function select_one_customer_controller($id){
    // create an instance of the Customer class
    $customer_instance = new Customer();
    // call the method from the class
    return $customer_instance->select_one_customer($id);
}

?>