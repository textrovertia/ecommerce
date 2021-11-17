<?php
 require_once '../settings/core.php';
  require_once '../controllers/new_article_controller.php';
 if(isset($_POST['submitArticle'])){

    // Post the form details
    $title = $_POST['title'];
    $category = $_POST['category'];
    $text = $_POST['text'];

    echo $title, $category, $text;
    $file = $_FILES['image']['name'];

    // Add the image to the product directory 
    $target_directory = '../images/article_images/'; 
    $file = $_FILES['image']['name'];
    $path = pathinfo($file);
    $filename = $path['filename'];
    $extension = $path['extension'];
    $writer_id = $_SESSION['customer_id'];

    $temp_name = $_FILES['image']['tmp_name'];
    $path_filename_ext = $target_directory.$filename.".".$extension;

    // Check if file already exists
    if (file_exists($path_filename_ext)) {
        $_SESSION['image_exists'] = 'Sorry, this image already exists'; 
        echo "Sorry, file already exists.";
    }else{
        move_uploaded_file($temp_name, $path_filename_ext);
        echo "Congratulations! File Uploaded Successfully.";
        $result = add_article_controller($title, $file, $category, $writer_id, $text);
        if ($result){
           echo 'Successfully added to db';
        }
        else{
            'Could not add product ';
        }
    }


    // https://www.allphptricks.com/upload-file-using-php-save-directory/0
}
?>