<?php
require_once('connection.php');
if(isset($_GET['id'])){
$article_id = $_GET['id'];

// echo $article_id;

try {
    $stmt = $conn->prepare("SELECT article_img FROM articles WHERE article_id = :article_id");
    $stmt->bindParam(':article_id', $article_id);
    $stmt->execute();
    $imageData = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($imageData) {
        $imageFilename = $imageData['article_img'];
        unlink('../assets/images/articles_imgs/' . $imageFilename);
    }

    $stmt = $conn->prepare("DELETE FROM articles WHERE article_id = :article_id");
    $stmt->bindParam(':article_id', $article_id);
    $stmt->execute();


    echo "Product and its image have been deleted successfully!";
    header('location: ../delete-article.php');
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

}

?>