<?php
$dbhost="localhost";
$dbUser="root";
$dbPass="";
$dbName="first_crud";
$conn=mysqli_connect($dbhost,$dbUser,$dbPass,$dbName);
if(!$conn){
    die("Something went wrong");
}
?>