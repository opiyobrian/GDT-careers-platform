<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    
    <style>

        .kibet {
            width: 100%;
            height: 100vh;
            background: url(assets/images/hill.jpg);
            background-repeat: no-repeat;
            background-size: cover;

        }

    </style>

</head>
<body class='kibet'>
    <br><br><div>
    <center>
    <h1 class="text-secondary text-center">Welcome to GDT Admin Panel</h1><br><br>
    <h3 class="text-info text-center">Create, expand, increase and invent more new technologies</h3><br><br>
    <h2 class="text-warning text-center">Kindly Login to procceed</h2>
    <form method="POST" action="admin_validation.php">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
        
                <input class="form-control" placeholder="Enter your email" name="email" type="email" required><br><br>
                
                <input class="form-control" placeholder="Enter your password" name="password" type="password" required><br><br>
                    
                <input class="btn btn-primary" type="submit" name="adminlogin" value="Login" required><br><br>
                    
                            

                Forgot password? Click <a href ="admin_reset.php">here</a><br><br>
                
                <h4 class="text-danger text-center">New admins to visit the ICT for activation.</h4>
            </div>
            <div class="col-md-4"></div>
        </div>
    </form>
    </center>
    </div>
    
</body>
</html>