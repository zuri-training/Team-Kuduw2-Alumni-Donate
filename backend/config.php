<?php


function db() {
    //set your configs here
    $host = "127.0.0.1";
    $user = "root";
    $db = "alumnidonate";
    $password = "";
    $conn = mysqli_connect($host, $user, $password, $db);
    if(!$conn){
        echo "<script> alert('Error connecting to the database') </script>";
    }
    return $conn;

}