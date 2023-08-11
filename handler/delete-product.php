<?php
require_once('connection.php');
if(isset($_GET['id'])){
$productID = $_GET['id'];

// echo $productID;

try {
    $stmt = $conn->prepare("SELECT product_img FROM products WHERE product_id = :product_id");
    $stmt->bindParam(':product_id', $productID);
    $stmt->execute();
    $imageData = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($imageData) {
        $imageFilename = $imageData['product_img'];
        unlink('../assets/images/product/' . $imageFilename);
    }

    $stmt = $conn->prepare("DELETE FROM products WHERE product_id = :product_id");
    $stmt->bindParam(':product_id', $productID);
    $stmt->execute();


    echo "Product and its image have been deleted successfully!";
    header('location: ../delete-product.php');
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

}

?>