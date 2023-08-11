<?php
require_once("./connection.php");


try {
  
    if (isset($_POST['submit'])) {
        $productName = $_POST['product_name'];
        $productPrice = $_POST['product_price'];
        $productLink = $_POST['product_link'];
        $categoryId = $_POST['category_id'];
        $productDesc = $_POST['product_desc'];

        // Handle image upload
        $targetDir = "../assets/images/product/";
        $actualName = basename($_FILES["product_img"]["name"]);
        $fileName = time()."_".$actualName;
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowedTypes = array('jpg', 'jpeg', 'png');
        if (in_array($fileType, $allowedTypes)) {
            // Upload file to the server
            if (move_uploaded_file($_FILES["product_img"]["tmp_name"], $targetFilePath)) {
                // Insert data into the database
                $stmt = $conn->prepare("INSERT INTO products (product_name, description, price, product_link, product_img, category_id) VALUES (:productName, :productDesc, :productPrice, :productLink,  :productImg, :categoryId)");
                $stmt->bindParam(':productName', $productName);
                $stmt->bindParam(':productDesc', $productDesc);
                $stmt->bindParam(':productPrice', $productPrice);
                $stmt->bindParam(':productLink', $productLink);
                $stmt->bindParam(':productImg', $fileName);
                $stmt->bindParam(':categoryId', $categoryId);

                if ($stmt->execute()) {
                    echo "Product added successfully.";
                    header('location: ../shop.php');
                } else {
                    echo "Error adding product.";
                }
            } else {
                echo "Error uploading image.";
            }
        } else {
            echo "Invalid file format. Only JPG, JPEG, and PNG files are allowed.";
        }
    }
} catch(PDOException $e) {
    echo "Data not inserted: " . $e->getMessage();
}
?>
