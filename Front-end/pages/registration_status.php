<?php
include_once "connect_database.php";


if(isset($_POST['register']))
{
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $schoolName = $_POST['schoolName'];
    $matricNumber = $_POST['matricNumber'];
    $level = $_POST['level'];

	
	if ($fullname=='' || $email=='' || $matricNumber==""|| $schoolName=='' || $level=="" || $password=="")
	{
		echo "<br><br>";
		echo "Incomplete information. Please try again.";
		echo "<br/><br/>"; 
		echo "Redirecting you back to main page in 10 seconds.";
		echo "<br/><br/>"; 
		echo "Or click <a href='./index.html'>here.</a>";
		header("refresh:10;url=./index.html" );
	}
	else
	{
      $conn = db();
		$al_status="Not Approve";
		$register_alumni = "INSERT INTO alumni_member (al_mat_no, al_password, al_status, al_email) 
		VALUES ('$matricNumber', '$password', '$al_status', '$email')";

		if ($conn->query($register_alumni)) 
		{
			$register_info = "INSERT INTO alumni_info (al_name,al_mat_no,al_school,al_email, al_level) 
			VALUES ('$fullname', '$matricNumber', '$schoolName','$email', '$level')";
			
	    	if($conn->query($register_info)){
				include './subsuccess.html';
			header("refresh:5;url=./login.html" );
			}
		} 
		else 
		{
    		echo "Error: " . $register_alumni . "<br>" . $conn->error;
			header("refresh:10;url=./signup.html" );
		}
	}
}

