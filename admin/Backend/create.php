<?php
include("connection.php");

$fullName = $_POST['full-name'];
$userName = $_POST['user-name'];
$email = $_POST['email'];
$password = $_POST['password'];

$userInsertQuery = "INSERT INTO users (full_name, user_name, email, password)
                    VALUES ('$fullName', '$userName', '$email', '$password');";
if ($conn->multi_query($userInsertQuery) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $userInsertQuery . "<br>" . $conn->error;
}

$conn->close();

header("Location: ../users.php");