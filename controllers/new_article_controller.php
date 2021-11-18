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