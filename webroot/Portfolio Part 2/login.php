<?php

include "Login.html";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $dbhost = getenv("MYSQL_SERVICE_HOST");
    $dbport = getenv("MYSQL_SERVICE_PORT");
    $dbuser = getenv("DATABASE_USER");
    $dbpwd = getenv("DATABASE_PASSWORD");
    $dbname = getenv("DATABASE_NAME");

    $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

    $email=$_POST["email"];
    $pass=$_POST["pass"];

    $query = "SELECT * FROM login_details WHERE Email = '$email' AND Pass='$pass'";

    $check= $conn->query($query);

    if($check->num_rows == 0) {
        echo "Error! You are not a user";
        mysqli_close($conn); 
    } else {
        mysqli_close($conn); 
        header("location:addPost.php");
    }
    
}

?>