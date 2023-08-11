<?php
require_once("./connection.php");

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve data from the form
        $category_name = $_POST['category_name'];
        $description = $_POST['description'];

        // Handle the uploaded image
        if (isset($_FILES['category_img']) && $_FILES['category_img']['error'] === UPLOAD_ERR_OK) {
            $tmp_name = $_FILES['category_img']['tmp_name'];
            $img_name = time()."_".$_FILES['category_img']['name'];
            $category_img = '../assets/images/category/' . $img_name; // Change 'uploads/' to your desired upload directory
            move_uploaded_file($tmp_name, $category_img);
        } else {
            // Default image or error handling (e.g., display an error message)
            $category_img = 'default_image.jpg'; // Replace with the path to your default image
        }

        // Prepare and execute the SQL INSERT query
        $stmt = $conn->prepare("INSERT INTO categories (category_name, description, category_img) VALUES (:category_name, :description, :category_img)");
        $stmt->bindParam(':category_name', $category_name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':category_img', $img_name);
        $stmt->execute();

        echo "Data inserted successfully!";
        header('Location: ../home.php');

    }
} catch (PDOException $e) {
    // Handle database connection or query errors
    echo "Error: " . $e->getMessage();
}
?>
