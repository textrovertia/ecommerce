<?php
    require_once '../classes/Article.php';

    function create_new_article($imagehref, $image, $heading, $text, $buttonlink){
        $article = new Article($imagehref, $image, $heading, $text, $buttonlink);
        return $article->get_html();
    }
?>