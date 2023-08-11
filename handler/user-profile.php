<?php
session_start();
require_once('./connection.php');
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['Name'];
    $mobile = $_POST['Mobile'];
    $email = $_POST['Email'];
    $location = $_POST['Location'];
    $currentPassword = sha1($_POST['current_password']);
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];
    $user_id = $_SESSION["id"];

    // echo $user_id;
    
    try {
        $stmt = $conn->prepare("SELECT `password` FROM `users` WHERE `user_id` = :user_id");
        $stmt->bindParam(':user_id', $user_id); 
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
     
        // echo $stmt->rowCount();
        if ($currentPassword === $userData['password']) {
            echo "hello";
            // Prepare the UPDATE query to update user profile
            $stmt = $conn->prepare("UPDATE `users` SET `username` = :name, `phone` = :mobile, email = :email, `location` = :location WHERE `user_id` = :user_id");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':mobile', $mobile);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':location', $location);
            $stmt->bindParam(':user_id', $user_id);
            $_SESSION["user"] = $name;

            // Execute the query to update user profile
            $stmt->execute();

            // If the user wants to change the password and the new password matches the confirmation password
            if (!empty($newPassword) && $newPassword === $confirmPassword) {
                // Prepare the UPDATE query to update user password
                $hashedPassword = sha1($newPassword);
                $stmt = $conn->prepare("UPDATE `users` SET `password` = :password WHERE `user_id` = :user_id");
                $stmt->bindParam(':password', $hashedPassword);
                $stmt->bindParam(':user_id', $user_id); 

                // Execute the query to update user password
                $stmt->execute();
            }

            // Redirect to a success page or display a success message
            header("Location: ../my-profile.php");
            exit;
        } else {
            // Current password is incorrect, display an error message or redirect to a failure page
            echo "Incorrect current password. Please try again.";
        }
    } catch (PDOException $e) {
        // Handle any exceptions or errors
        echo "Error: " . $e->getMessage();
    }
}
?>