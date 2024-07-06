<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit Student Data</title>
</head>
<body>
       <div class="container">
        <header class="d-flex justify-content-between my-04">
            <h1>Edit Student</h1><br>
        </header>
        <?php
      if(isset($_GET["id"])){
        $id=$_GET["id"];
        include("connect.php");
        $sql="select * from studentMaster where Id=$id";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);
        ?>
        <form action="process.php" method="post">
            <div class="form-element my-04">
                <input type="text" style="display:none" class="" name="id" value="<?php echo $row["Id"]; ?>">
                <input type="text" class="form-control" name="studentName" placeholder="StudentName" value="<?php echo $row["Studentname"]; ?>">
            </div>
            <br>
            <div class="form-element" my-04>
                <input type="text" class="form-control" name="fatherName" placeholder="FatherName" value="<?php echo $row["FatherName"]; ?>">
            </div><br>
            <div class="form-element" my-04>
                <input type="text" class="form-control" name="mobile" placeholder="Mobile" value="<?php echo $row["MobileNo"]; ?>">
            </div><br>
            <div class="form-element" my-04>
                <input type="submit" class="btn btn-success" name="editSubmit" value="Edit Student" >
            </div>
        </form>
    </div>
    <?php
      }
        ?>
</body>
</html>