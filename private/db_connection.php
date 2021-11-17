<?php
    //connect to the database
    $host = "localhost";
    $user = "root";
    $pass = "13572468";
    $database = "mycrud_db";
    
    // $db = "mycrud_db";
    
    $conn = mysqli_connect($host, $user, $pass, $database);
    
    if ($conn->connect_error) {

       die('Connection Failed : '.$conn->connect_error);
    }

?>