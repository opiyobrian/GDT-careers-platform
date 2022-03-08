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
            background: url(assets/images/background.jpg);
            background-repeat: no-repeat;
            background-size: cover;

        }
        .bee{
            color: blue;
        }

    </style>

</head>
<body class='kibet'>
    

<br><br>
    <form method="POST" action="validation.php">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <center>
                    <h1 class='bee'>Welcome to GDT Careers</h1>
                    <h2 class='bee'>Kindly Login to procceed</h2>
                
                <input class="form-control" placeholder="Enter your email" name="email" type="email" ><br><br>
                
                <input class="form-control" placeholder="Enter your password" name="password" type="password" ><br><br>
                    
                <input class='btn btn-primary' type="submit" name="login" value="Login"><br><br>
                    <hr> Or
                            <br><br>

                Forgot password? Click <a href ="password_reset.php">here</a><br><br>
                Don't have an account? <a href ="user_signup.php">Register</a>
                </center>
            </div>
            <div class="col-md-4"></div>
        </div>
    
    </form>
    

</body>
</html>