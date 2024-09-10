<?php
include("connection.php");
$itemTablesql = '
CREATE TABLE items(
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
item_date DATE,
title VARCHAR(50),
licence VARCHAR(100),
dimension VARCHAR(100),
format VARCHAR(100),
image VARCHAR(100),
user_id INT,
tag_id INT,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);';

$conn->query($itemTablesql);


?>