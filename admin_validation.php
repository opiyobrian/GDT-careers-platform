<?php

//check if the button has been clicked
if(isset($_POST["adminlogin"])){

    //start receiving data from the user
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    //connection to the database to save data
    require_once "insert.php";
    
    
    $restrict = "SELECT * FROM `admin` WHERE `email`='$email' && `password`='$password'";
    $result = mysqli_query($conn, $restrict);
    $num = mysqli_num_rows($result);
  
    if($num == 1){
        header("location:form.php");
        }else{
            header("location:admin_login.php");
        }
    }
?>