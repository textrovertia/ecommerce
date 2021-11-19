<?php
require('../classes/order_class.php');


function add_order_controller($c_id, $invoice, $date, $status){
    $order_instance = new Order(); 
    return $order_instance->add_order($c_id, $invoice, $date, $status);
}

function select_all_orders_controller(){
    $order_instance = new Order();
    return $order_instance->select_all_orders();
}

function select_one_customer_controller($c_id){
    $order_instance = new Order(); 
    return $order_instance->select_one_customer($c_id);
}

function select_one_order_controller($order_id){
    $order_instance = new Order(); 
    return $order_instance->select_one_customer($order_id);
}

function total_readers_controllers(){
    $order_instance = new Order();
    return $order_instance->total_readers(); 
}

function total_writers_controllers(){
    $order_instance = new Order();
    return $order_instance->total_writers(); 
}

function add_article_controller($article_title, $article_image, $category, $writer_id){
    $article = new Order();
    $article->add_article($article_title, $article_image, $category, $writer_id);
}

function select_all_articles_controller(){
    $article = new Order(); 
    return $article->select_all_articles();
}

function total_articles_on_topic_controller($topic){
    $article = new Order();
    return $article->total_articles_on_topic($topic);
}
?>