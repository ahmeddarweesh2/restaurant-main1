<?php
include ("connection.php");
$bookTablesql = '
CREATE TABLE books(
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50),
phone_number INT(11),
email VARCHAR(100),
how_many VARCHAR(100),
book_date DATE,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);';

$conn->query($bookTablesql);



?>