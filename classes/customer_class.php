<?php
require('../database/connection.php');

class Customer extends Connection{

    function add_customer($username, $email, $password, $class, $number, $user_role){
        return $this->query("insert into customer(customer_name, customer_email, customer_pass, customer_class,
        customer_contact, user_role) values
        ('$username', '$email', '$password', '$class', '$number', '$user_role')");
    }

    function login_customer($email){
        return $this->fetchOne("select * from customer where customer_email = '$email'");
    }


    function delete_one_customer($id){
        return $this->query("delete from customer where customer_id = '$id'");
    }

    function update_one_customer($id, $username, $email, $password, $class, $number, $image, $user_role){
        return $this->query("update customer set customer_name='$username', customer_email='$email', customer_pass='$password', customer_country='$country'
        customer_city='$city', customer_contact='$city', customer_image='$image', user_role='$user_role' where customer_id='$id'");
    }

    function select_all_customers(){
        return $this->fetch("select * from customer");
    }

    function select_one_customer($id){
        return $this->fetchOne("select * from customer where customer_id='$id'");
    }
}


?>