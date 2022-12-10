<?php
session_start();
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/  
    $success = false;
    if ($_SESSION) {
        session_unset();
        session_destroy();
        $success = true;
    }

    if ($success) {
        header("location: ../Front-end/pages/index.html");    
    }
}

logout();
//echo "HANDLE THIS PAGE";
?>