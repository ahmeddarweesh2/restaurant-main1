<?php
include("connection.php");

$userTableSql = '
CREATE TABLE users(
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
full_name VARCHAR(30) NOT NULL,
user_name VARCHAR(30) NOT NULL,
email VARCHAR(50),
password VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);';

$conn->query($userTableSql);



