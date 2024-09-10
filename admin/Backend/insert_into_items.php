<?php
include "connection.php";

$itemDate = $_POST['itemdate'];
$title = $_POST['title'];
$license = $_POST['license'];
$dimension = $_POST['dimension'];
$format = $_POST['format'];
$userId = ['userid'];
$tagId = $_POST['category'];


$itemsInsertQuery = "INSERT INTO items (item_date, title,  licence, dimension, format, user_id, tag_id )
                    VALUES ('$itemDate', '$title', '$license', '$dimension','$format', '1', '1');";
                    // print_r($itemsInsertQuery);exit;
if ($conn->multi_query($itemsInsertQuery) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $itemsInsertQuery . "<br>" . $conn->error;
}

$conn->close();

header("Location: ../items.php");


?>
