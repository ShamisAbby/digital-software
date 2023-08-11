<?php
require_once('./connection.php');
if(isset($_POST['submit'])){
    try {
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']); 
        $location = $_POST['location'];
        $phone = $_POST['phone'];

        $stmt = $conn->prepare("SELECT email FROM users WHERE email = :email");
        $stmt->execute([':email'=>$email]);

        if($stmt->rowCount() == 0){
            session_start();
            if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
                $role = "admin";
            }else{
                $role = "client";
            }
        
            $sql = "INSERT INTO `users` (username, email, password, location, phone, role) 
                    VALUES (:username, :email, :password, :location, :phone, :role)";
        
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':location', $location);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':role', $role);
    
            $stmt->execute();
            if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
                header('location: ../home.php?pass=1');
            }else{
                header('location: ../authentication-log-in.php?pass=1');

            }
        }else{
            header('location: ../authentication-sign-up.php?error=2');
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
