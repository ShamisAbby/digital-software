<?php
require_once("./connection.php");
if (isset($_POST['submit'])) {
    try {

        $email = $_POST['email'];
        $password = sha1($_POST['pass']);

        // Prepare the query to check username and password against the database
        $query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $stmt = $conn->prepare($query);
        $stmt->execute(['email' => $email, 'password' => $password]);

        if ($stmt->rowCount() > 0) {
            $res = $stmt->fetch();
            session_start();
            $_SESSION["user"] = $res['username'];
            $_SESSION["role"] = $res['role'];
            $_SESSION["id"] = $res['user_id'];

            header('location: ../home.php?pass=1');
        } else {
            header('location: ../admin/index.php?error=1');
        }
    } catch (PDOException $e) {
        // Handle database connection or query errors
        http_response_code(500);
    }

    
}
