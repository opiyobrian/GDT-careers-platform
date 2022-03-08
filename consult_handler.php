<?php

//check if the button has been clicked
if(isset($_POST["apply"])){

    //start receiving data from the user
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];
    $academic = $_POST["academic"];
    $field = $_POST["field"];
    $grade = $_POST["grade"];
    $cv = $_POST["pdf"];

    //connection to the database to save data
    require_once "insert.php";
    
    $insertQuery = "INSERT INTO `consultant`(`id`, `name`, `email`, `phone`, `gender`, `country`, `academic`, `field`, `grade`, `cv`) VALUES (null,'$name','$email','$phone','$gender','$country','$academic','$field','$grade','$cv')";
    
    $save = mysqli_query($conn,$insertQuery);
    
        
    if (isset($save)){
        echo "$name your application was submitted successfully.";
        }else{
            echo "application failed";
    }
    
}
?>