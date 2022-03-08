<?php

//check if the button has been clicked
if(isset($_POST["login"])){

    //start receiving data from the user
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    //connection to the database to save data
    require_once "insert.php";
    
    
    $restrict = "SELECT * FROM `users` WHERE `email`='$email' && `password`='$password'";
    $result = mysqli_query($conn, $restrict);
    $num = mysqli_num_rows($result);
  
    if($num == 1){
        header("location:jobs.php");
        }else{
            header("location:login.php");
        }
    }
?>