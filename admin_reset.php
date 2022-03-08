
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

    

        <style>

            .kibet {
            width: 100%;
            
            background: url(assets/images/nature.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            
            }
        
            .ben{
                margin-top: 10%;
            }

        </style>  

    
   

</head>
<body class='kibet'>
        <div class='ben'>
            <center>
            <h1 class="text-info text-center">Reset Passwprd</h1>
            
            <form action="admin_pass_handler.php" class="was-validated" method="POST">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        
                        <input input class="form-control" placeholder="Enter your Email" name="email" type="email"><br><br>
                        
                        <input input class="form-control" placeholder="Enter new password" name="password" type="password"><br><br>

                        <input class='btn btn-primary' type="submit" name="reset" value="Reset password">&nbsp &nbsp &nbsp &nbsp
                        <a input class='btn btn-primary' href="admin_login.php">Back</a>
                    </div>
                    <div class="col-md-4"></div>
                </div>

            </form>
            </center>
        </div>
</body>
</html>