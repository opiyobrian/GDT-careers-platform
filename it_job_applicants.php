<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicants</title>

    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">

</head>
<body>
    <center>
    <a class='btn btn-primary' href="logout.php">Logout</a>
    </center>
    <h1 class="text-info text-center">APPLICANTS</h1>
    <table class="table table-dark table-hover">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Academic Quolification</th>
            <th>Field of Study</th>
            <th>Grade Obtained</th>
            <th>Resume</th>
            
        </tr>
   


            <?php

                require_once 'insert.php';

                $selectQuery = "SELECT * FROM `it` ";

                $applicants = mysqli_query($conn, $selectQuery);

                foreach($applicants as $applicant){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $gender = $_POST['gender'];
                    $country = $_POST['country'];
                    $academic = $_POST['academic'];
                    $field = $_POST['field'];
                    $grade = $_POST['grade'];
                    $cv = $_POST['cv'];
                    echo "
                        <tr>
                            <td>$name</td>
                            <td>$email</td>
                            <td>$phone</td>
                            <td>$gender</td>
                            <td>$country</td>
                            <td>$academic</td>
                            <td>$field</td>
                            <td>$grade</td>
                            <td>$cv</td>
                        </tr>";
                }
                ?>



        </table>
    </body>
</html>