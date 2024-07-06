<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Add Student Data</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-04">
            <h1>Add New Student</h1><br>
        </header>
        <form action="process.php" method="post">
            <div class="form-element my-04">
                <input type="text" class="form-control" name="studentName" placeholder="Student Name">
            </div>
            <br>
            <div class="form-element" my-04>
                <input type="text" class="form-control" name="fatherName" placeholder="Father Name">
            </div><br>
            <div class="form-element" my-04>
                <input type="text" class="form-control" name="mobile" placeholder="Mobile">
            </div><br>
            <div class="form-element" my-04>
                <input type="submit" class="btn btn-success" name="submit" value="Add Student" >
            </div>
        </form>
    </div>
        
</body>
</html>