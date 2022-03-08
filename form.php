



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>

    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    
    <style>

        .kibet {
            width: 100%;
            background: url(assets/images/GDTech.png);
            background-repeat: no-repeat;
            background-size: cover;
            align: center;

        }


    </style>

</head>
<body class='kibet'>

    <center>
    <form method="POST" action="insert_handler.php">
        <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"><br><br><br><br><br>
                <h1 class="text-info text-center">Please Register new User here</h1><br>
                <input class="form-control" placeholder="Enter your Name" name="name" type="text" ><br><br>
                
                <input class="form-control" placeholder="Enter your Email" name="email" type="email" ><br><br>
                
                <input class="form-control" placeholder="Enter your password" name="password" type="password" ><br><br>

                
                <input class='btn btn-primary' type="submit" name="register" value="Register">&nbsp &nbsp &nbsp &nbsp
                <input class='btn btn-primary' type="reset" value="Reset"><br><br>
                <a href="output.php">Registered users</a>
            
            </div>
            <div class="col-md-4"><br><br><br><a class='btn btn-primary' href="logout.php">Logout</a></div>
        </div>
    </form>
    </center>
</body>
</html>