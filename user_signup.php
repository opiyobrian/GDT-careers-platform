<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">

    <style>

        .kibet {
            width: 100%;
            height: 100vh;
            background: url(assets/images/background.jpg);
            background-repeat: no-repeat;
            background-size: cover;

        }

    </style>
    

</head>
<body class='kibet'>
    <center>
    <h1 class="text-danger textc-center">Welcome to GDT</h1>
    <h2 class="text-info text-center">To proceed please Sign Up</h2>
    <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form method="POST" action="insert_handler.php">
                    
                    <input class="form-control" placeholder="Enter your Name" name="name" type="text" ><br><br>
                    
                    <input class="form-control" placeholder="Enter your Email" name="email" type="email" ><br><br>
                    
                    <input class="form-control" placeholder="Enter your password" name="password" type="password" ><br><br>

                    
                    <input class="btn btn-primary" type="submit" name="register" value="Register"><br><br>
                    Or Have an account? <a href ="login.php">Login</a>
            </div>
            <div class="col-md-4"></div>
    </div>
            
                </form>
    </center>
    
</body>
</html>