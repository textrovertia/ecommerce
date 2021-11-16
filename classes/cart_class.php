<?php
require('../database/connection.php');
// require('../Login/core.php');

class Cart extends Connection{

    function add_to_cart($id, $customer_id, $customer_IP, $qty){
        return $this->query("insert into cart(p_id, c_id, ip_add, qty) values
        ('$id', '$customer_id', '$customer_IP', '$qty')");
    }

    function select_cart_item($id){
        return $this->fetchOne("select * from cart where p_id = '$id'");
    }

    function select_all_in_cart($id){
        return $this->fetch("select * from cart left join products on p_id = product_id");
    }

    function remove_from_cart($id, $customer_IP){
        return $this->query("delete from cart where p_id = '$id' and ip_add = '$customer_IP'");
    }

    function manage_cart_quantity($id, $new_qty){
        return $this->query("update cart set qty = '$new_qty' where p_id = '$id'");
    }

    function select_product_quantity($id){
        return $this->fetch("select * from cart where p_id = '$id'");
    }

    function calculate_total($id, $customer_IP){
        return $this->fetch("select SUM(qty * product_price) as total from cart inner join products on 
        p_id=product_id where c_id = '$id' or ip_add = '$customer_IP'");
    }

    function add_order($customer_id, $invoice_no, $order_date, $order_status){
        return $this->retrieveLast("insert into orders (customer_id, invoice_no, order_date, order_status) values('$customer_id', '$invoice_no', '$order_date', '$order_status')");

    }

    function select_cart($customer_id, $customer_IP){
        return $this->fetch("select * from cart where c_id='$customer_id' or ip_add='$customer_IP'");
    }

    function add_order_details($result2, $prod_id, $qty){
        return $this->query("insert into orderdetails(order_id, product_id, qty) values ('$result2', '$prod_id', '$qty') ");
    }

    function add_payment($amount, $customer_id, $result2, $currency, $order_date){
        return $this->query("insert into payment(amt, customer_id, order_id, currency, payment_date) values ('$amount', 
        '$customer_id', '$result2', '$currency', '$order_date') ");
    }

    function delete_cart($customer_id, $customer_IP){
        return $this->query("delete from cart where ip_add = '$customer_IP' or c_id = '$customer_id'");
    }

}