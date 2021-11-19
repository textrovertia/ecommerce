<?php
require_once '../settings/core.php';
require_once '../controllers/new_article_controller.php';

check_login();
if( check_permission() != 2  && check_permission() != 3){
    header('Location: ../index.php');   
}

$article_id = $_GET['id'];
echo $article_id;

$location = $_GET['location'];
echo $location;
$result = delete_article_controller($article_id);

if($result){
    echo 'Deleted successfully';
    if ($location == 'admin'){
        header("Location: ../admin/admin.php");
    }
}
?>