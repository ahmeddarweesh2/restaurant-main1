<?php
$servername="localhost";
$username="root";
$password="";
$DB_name="restaurant";

$conn=new mysqli ($servername , $username , $password , $DB_name);
//check conn
if($conn->connect_error){
    die("connection faild: " .$conn->connect_errno);
}
?>