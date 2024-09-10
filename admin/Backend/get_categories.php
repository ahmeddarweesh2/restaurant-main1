<?php
include "connection.php";

$sql = "SELECT title, id FROM tags";
$result = $conn->query($sql);

// Prepare an array to hold the categories
$categories = array();
$items = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {        
        $categories[] = $row;
    }
}
$sql = "SELECT * FROM items";
$itemResult = $conn->query($sql);
if ($itemResult->num_rows > 0) {
    while($itemRow = $itemResult->fetch_assoc()) {
        $items[] = $itemRow;
    }
}

// Close connection
$conn->close();
?>