<?php
if(isset($_POST['su'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "trip";  // Ensure that the database name is correct

    $con = mysqli_connect($server, $username, $password, $database);

    if(!$con){
        die("connection to the database failed: " . mysqli_connect_error());
    } else {
        echo "connection successful!";
    }

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', current_timestamp())";

    if($con->query($sql) === true){
        echo "inserted successfully";
    } else {
        echo "error: $sql <br> $con->error";
    }

    $con->close();
}
?>
