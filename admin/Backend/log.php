<?php
include "connection.php";
$query= 'SELECT user_name , "password" FROM users' ;
$result =$conn -> query ($query);