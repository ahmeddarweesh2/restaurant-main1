<?php
include "connection.php";
$query = 'SELECT * FROM users';
$result = $conn->query($query);
