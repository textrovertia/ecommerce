<?php
require_once '../classes/new_article_class.php';

function add_article_controller($article_title, $article_image, $category, $writer_id){
    $article = new NewArticle();
    $article->add_article($article_title, $article_image, $category, $writer_id);
}