<?php

class NewArticle extends Order{

   
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

$article = new Order(); 
var_dump($article->select_all_articles());


?>