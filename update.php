<?php

    if (isset($_GET['id'])){
        $receivedName = $_GET['name'];
        $receivedEmail = $_GET['email'];
        $receivedPassword = $_GET['password'];
        $receivedId = $_GET['id'];
    }
    
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>

    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
   

</head>
<body>
    <center>
    <h1 class="text-info text-center">Update User</h1>
    
    <form action="update_handler.php" class="was-validated" method="POST">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <input input class="form-control" placeholder="Enter your Name" name="name" type="text" value="<?php echo "$receivedName";?>"><br><br>
                
                <input input class="form-control" placeholder="Enter your Email" name="email" type="email" value="<?php echo "$receivedEmail";?>"><br><br>
                
                <input input class="form-control" placeholder="Enter your password" name="password" type="password" value="<?php echo "$receivedPassword";?>"><br><br>

                <input  type="hidden" name="my_id" value="<?php echo "$receivedId";?>">
                <input class='btn btn-primary' type="submit" name="update" value="Update">&nbsp &nbsp &nbsp &nbsp
                <a class="btn btn-primary" href="output.php">Back</a>&nbsp &nbsp &nbsp &nbsp
            </div>
            <div class="col-md-4"></div>
        </div>

    </form>
    </center>
</body>
</html>