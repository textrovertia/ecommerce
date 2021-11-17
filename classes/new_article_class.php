<?php

require '../classes/order_class.php';
class NewArticle extends Order{  
    function add_article($article_title, $article_image, $category, $writer_id, $article_text){
        return $this->query("insert into article(article_title, article_image, category, writer_id, article_text) values
        ('$article_title', '$article_image', '$category', '$writer_id', '$article_text')");
    }

    function delete_article($id){
        return $this->query("delete from article where article_id = '$id'");
    }

    function select_writers_articles($id){
        return $this->fetch("select * from article where writer_id='$id'");
    }
    function select_one_article($id){
        return $this->fetchOne("select * from article where article_id='$id'");
    }

}



?>