<?php
require('../database/connection.php');

class Order extends Connection{

    function add_order($c_id, $invoice, $date, $status){
        return $this->query("insert into orders(customer_id, invoice_no, order_date, order_status) values
        ('$c_id', '$invoice', '$date', '$status')");
    }

    function delete_order($order_id){
        return $this->query("delete from orders where order_id = '$order_id'");
    }

    function select_all_orders(){
        return $this->fetch("select * from orders");
    }

    function update_order($order_id, $c_id, $invoice, $date, $status){
        return $this->query("update orders set customer_id='$c_id', invoice_no='$invoice', order_date='$date', order_status='$status' where order_id='$order_id'");
    }

    function select_one_order($order_id){
        return $this->fetchOne("select * from orders where order_id='$order_id'");
    }

    function select_one_customer($c_id){
        return $this->fetchOne("select * from customer where customer_id='$c_id'");
    }

    function total_readers(){
        return $this->query("select COUNT(customer_id) from customer where user_role=1");
    }

    function total_writers(){
        return $this->query("select COUNT(customer_id) from customer where user_role='2'");
    }

    function add_article($article_title, $article_image, $category, $writer_id){
        return $this->query("insert into article(article_title, article_image, category, writer_id) values
        ('$article_title', '$article_image', '$category', '$writer_id')");
    }

    function delete_article($id){
        return $this->query("delete from article where article_id = '$id'");
    }

    function select_all_articles(){
        return $this->fetch("select * from article");
    }

    function select_one_article($id){
        return $this->fetchOne("select * from article where article_id='$id'");
    }

}


?>