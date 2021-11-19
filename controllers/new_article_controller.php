<?php
require_once '../classes/new_article_class.php';

function add_article_controller($article_title, $article_image, $category, $writer_id, $article_text){
    $article = new NewArticle();
    return $article->add_article($article_title, $article_image, $category, $writer_id, $article_text);
}

function select_all_articles_controller(){
    $article = new NewArticle(); 
    return $article->select_all_articles();
}

function select_writers_articles_controller($id){
    $article = new NewArticle();
    return $article->select_writers_articles($id);
}

function delete_article_controller($id){
    $article = new NewArticle();
    return $article->delete_article($id);
}

function select_one_article_controller($id){
    $article = new NewArticle();
    return $article->select_one_article($id);
}

function select_recent_article(){
    $article  = new NewArticle;
    return $article->select_latest_article();
}

function check_last_payment_controller($customer_id){
    $article = new NewArticle;
    return $article->check_last_payment($customer_id);
}

function select_articles_by_category_controller($category){
    $article = new NewArticle; 
    return $article->select_articles_by_category($category); 
}

function select_article_writer_controller($writer_id){
    $article = new NewArticle();
    return $article->select_article_writer($writer_id);
}