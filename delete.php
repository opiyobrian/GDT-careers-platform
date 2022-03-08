<?php
if(isset($_GET['id'])){

    $userid = $_GET['id'];

    require_once "insert.php";

    $deleteQuery ="DELETE FROM `users` WHERE id='$userid'";
    $delete = mysqli_query($conn, $deleteQuery);

    if (isset($delete)) {
        header("location:output.php");
    }else{
        die("Delete user failed");
    }
}