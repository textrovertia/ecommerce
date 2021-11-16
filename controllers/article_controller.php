<?php
    require_once '../classes/ArticleMenu.php';

    function create_new_article($imagehref, $image, $heading, $text, $buttonlink){
        $article = new ArticleMenu($imagehref, $image, $heading, $text, $buttonlink);
        return $article->get_html();
    }
?>