<?php
include "connection.php";
$query= 'SELECT title FROM tags' ;
$result =$conn -> query ($query);