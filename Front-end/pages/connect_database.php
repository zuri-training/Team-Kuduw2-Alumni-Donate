<?php


function db() {
  
    $host = "localhost";
    $user = "root";
    $db = "alumni_donate";
    $password = "";
    $conn = mysqli_connect($host, $user, $password, $db);
    if(!$conn){
        echo "<script> alert('Error connecting to the database') </script>";
    }
    return $conn;

}
