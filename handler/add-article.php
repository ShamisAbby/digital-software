<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $article_link = $_POST['article_link'];
    $category_id = $_POST['category_id'];
    $articles_name = $_FILES['article_file']['name'];
    $articles_tmp = $_FILES['article_file']['tmp_name'];

    $new_articles_name = time()."_".$articles_name;
    $articles_store = "../assets/articles/{$new_articles_name}"; 

    move_uploaded_file($articles_tmp, $articles_store);

    $img_file_name = $_FILES['article_img']['name'];
    $img_file_tmp = $_FILES['article_img']['tmp_name'];

    $img_new_name = time()."_".$img_file_name;
    $img_store = "../assets/images/articles_imgs/{$img_new_name}"; 

    move_uploaded_file($img_file_tmp, $img_store);

    $sql = "INSERT INTO articles (category_id, title, article_link, article_path, article_img, publish_date)
            VALUES (:category_id, :title, :article_link, :article_path, :article_img, NOW())";

    $stmt= $conn->prepare($sql);
    $stmt->bindParam(':category_id', $category_id);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':article_link', $article_link);
    $stmt->bindParam(':article_path', $new_articles_name);
    $stmt->bindParam(':article_img', $img_new_name);

    if($stmt->execute()){
        header('Location: ../article.php');
        echo 'Article data inserted successfully!';
    } else {
        echo 'There was an error in your request';
    }
}
?>
