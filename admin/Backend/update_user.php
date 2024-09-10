<?php
include "connection.php";

$full_name = $_POST['full-name'];
$user_name = $_POST['user-name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "UPDATE users SET full_name = ?, user_name = ?, email = ?,  password = ?, reg_date = ? ";
$stmt = $conn->prepare($query);


$stmt->bind_param("sssssi", $first_name, $user_name, $email,  $password);
$stmt->execute();
$conn->close();
header("Location:  ./edituser.php");
exit;
?>