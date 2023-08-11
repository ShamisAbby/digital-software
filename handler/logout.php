
<?php
session_start();
require_once("connection.php");
$user = $_SESSION["id"];
$stmt = $conn->prepare("UPDATE users SET lastLogin=CURRENT_TIMESTAMP WHERE user_id=:id");
$stmt->execute(array(":id" => $user));
unset($_SESSION["id"]);
unset($_SESSION["user"]);
unset($_SESSION["role"]); 
session_destroy();
header("location:../index.php");
?>
