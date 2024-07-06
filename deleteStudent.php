<?php
if(!isset($_GET["id"]))
echo $_GET["id"];
$id=$_GET["id"];
include("connect.php");
$sql="delete from studentMaster where Id=$id";
if(mysqli_query($conn,$sql)){
    echo "record deleted successfully";
}else
{
    die("Something went wrong");
}
?>