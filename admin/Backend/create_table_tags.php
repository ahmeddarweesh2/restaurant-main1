<?php
include("connection.php");

$tagTablesql = '
CREATE TABLE tags(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP    
);';

$conn->query($tagTablesql);
?>