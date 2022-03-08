<?php

//check if the button has been clicked
if(isset($_POST["register"])){

    //start receiving data from the user
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    //connection to the database to save data
    require_once "insert.php";
    
    $insertQuery = "INSERT INTO `users`(`id`, `name`, `email`, `password`) VALUES (null,'$name','$email','$password')";
    
    $restrict = "SELECT * FROM `users` WHERE `email`='$email'";
    $result = mysqli_query($conn, $restrict);
    $num = mysqli_num_rows($result);
    if($num == 0){
        $save = mysqli_query($conn,$insertQuery);
        if (isset($save)){
            echo "$name registered successfully";
            }else{
                echo "Registration failed";
            }
    }else{
        die("Email already used");
    }
}
?>