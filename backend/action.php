<?php
include "userauth.php";
include_once "config.php";


switch(true){
    case isset($_POST['register']):
        //extract the $_POST array values for name, password and email
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $schoolName = $_POST['schoolName'];
            $matricNumber = $_POST['matricNumber'];
            $level = $_POST['level'];
        registerUser($fullname, $email, $password, $schoolName, $matricNumber, $level);
        break;

    case isset($_POST['login']):
            $email = $_POST['email'];
            $password = $_POST['password'];
        loginUser($email, $password);
        break;

    case isset($_POST["reset"]):
            $email = $_POST['email'];
            $password = $_POST['password'];
        resetPassword($email, $password);
        break;

    case isset($_GET["all"]):
        getusers();
        break;
}