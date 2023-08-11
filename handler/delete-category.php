<?php
require_once('connection.php');
if(isset($_GET['id'])){
$category_id = $_GET['id'];

// echo $category_id;

try {
    $stmt = $conn->prepare("SELECT category_img FROM categories WHERE category_id = :category_id");
    $stmt->bindParam(':category_id', $category_id);
    $stmt->execute();
    $imageData = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($imageData) {
        $imageFilename = $imageData['category_img'];
        unlink('../assets/images/category/' . $imageFilename);
    }

    $stmt = $conn->prepare("DELETE FROM categories WHERE category_id = :category_id");
    $stmt->bindParam(':category_id', $category_id);
    $stmt->execute();


    echo "Product and its image have been deleted successfully!";
    header('location: ../delete-category.php');
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

}

?>