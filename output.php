<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">

</head>
<body>
    <center>
    <a class="btn btn-primary" href="form.php">Register New User</a>
    </center>
    <h1 class="text-info text-center">Registered Users</h1>
    <table class="table table-dark table-hover">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
   


            <?php

                require_once 'insert.php';

                $selectQuery = "SELECT * FROM `users` ";

                $users = mysqli_query($conn, $selectQuery);

                foreach($users as $user){
                    $username = $user['name'];
                    $useremail= $user['email'];
                    $userpassword = $user['password'];
                    $userid = $user["id"];

                    echo "
                        <tr>
                            <td>$username</td>
                            <td>$useremail</td>
                            <td>$userpassword</td>
                            <td><a class='btn btn-danger'  href='delete.php?id=$userid'>Delete</a> </td>
                            <td><a class='btn btn-primary' href='update.php?id=$userid&name=$username&email=$useremail&password=$userpassword'>Update</a>
                        </tr>";
                }
                ?>



        </table>
    </body>
</html>