<?php
if(isset($_POST["update"]))
require "insert.php";
    $updatedname = mysqli_real_escape_string($conn,$_POST["name"]);
    $updatedemail = mysqli_real_escape_string($conn,$_POST["email"]);
    $updatedpassword = mysqli_real_escape_string($conn,$_POST["password"]);
    $receivedId = mysqli_real_escape_string($conn,$_POST["my_id"]);


    $updateQuery ="UPDATE `users` SET `name`='$updatedname',`email`='$updatedemail',`password`='$updatedpassword' WHERE `id`='$receivedId'";
    $update = mysqli_query($conn, $updateQuery);

    if (!$update) {
        die("update user failed");
    }else{
        header("location:output.php");
    }