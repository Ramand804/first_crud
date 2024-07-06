<?php
include("connect.php");
if(isset($_POST["submit"])){
    $studentName=mysqli_real_escape_string($conn,$_POST["studentName"]);
    $fatherName=mysqli_real_escape_string($conn,$_POST["fatherName"]);
    $mobile=mysqli_real_escape_string($conn,$_POST["mobile"]);
    $sql="insert into studentmaster(Studentname,FatherName,MobileNo,isActive) VALUES ('$studentName','$fatherName','$mobile',1)";
    if(mysqli_query($conn,$sql)){
        echo "Record inserted successfully";
    }else{
        die("Something went wrong");
    }
}
if(isset($_POST["editSubmit"])){
    $studentName=mysqli_real_escape_string($conn,$_POST["studentName"]);
    $fatherName=mysqli_real_escape_string($conn,$_POST["fatherName"]);
    $mobile=mysqli_real_escape_string($conn,$_POST["mobile"]);
    $id=mysqli_real_escape_string($conn,$_POST["id"]);
    $sql="update  studentmaster set Studentname='$studentName',FatherName='$fatherName',MobileNo= $mobile where Id=$id";
        if(mysqli_query($conn,$sql)){
        echo "Record updated successfully";
    }else{
        die("Something went wrong");
    }
}?>