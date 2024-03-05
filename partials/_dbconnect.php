<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asksolution";

$connect = mysqli_connect($servername, $username, $password, $dbname);
if(!$connect){
    die("Connection Unsuccessfull").mysqli_connect_error();
}
?>