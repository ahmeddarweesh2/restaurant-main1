<?php
include("connection.php");
$title = $_POST['title'];

$tagInsertQuery = "INSERT INTO tags (title)
                    VALUES ('$title');";
if ($conn->multi_query($tagInsertQuery) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $tagInsertQuery . "<br>" . $conn->error;
}

$conn->close();

header("Location: ../categories.php");