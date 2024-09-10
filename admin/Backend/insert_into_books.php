<?php
include("connection.php");

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$many = $_POST['many'];
$date = $_POST['date'];

$bookInsertQuery = "INSERT INTO books (name, phone_number, email, how_many,book_date)
                    VALUES ('$name', '$phone', '$email', '$many' , '$date');";
if ($conn->multi_query($bookInsertQuery) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $bookInsertQuery . "<br>" . $conn->error;
}

$conn->close();



session_start();

// Set the alert message in the session
$_SESSION['alert_message'] = "Operation successful!";

// Redirect to the previous page
header("Location: " . $_SERVER['HTTP_REFERER']);
exit();