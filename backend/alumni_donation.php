<?php
include_once "config.php";
session_start();
if(isset($_POST['add_donation']))
{

	$title=$_REQUEST['title'];
	$desc=$_REQUEST['desc'];
	$amount=$_REQUEST['amount'];
	$name=$_REQUEST['name'];

	if ($title=='' || $desc=='' || $name==''|| $amount=='')
	{
		echo "<br /><p class=p1>*****Incomplete information. No donation inserted.*****</p>";
	}
	else
	{
        $conn = db();
		$sql = "INSERT INTO donation_data (name, donation_title, description, amount) VALUES('$name','$title', '$desc', '$amount')";

		if ($conn->query($sql) === TRUE) 
		{
	    	echo "<br /><p class=p1>*****Donation successfully created.*****</p>";
			echo "<br /><p class=p2><a href=..\Front-end\pages\donationrecord.php>View all Donation data</a></p>";
            echo "<br /><p class=p2><a href=..\Front-end\pages\userdashboard.php>Click here</a> to return to your user dashboard</p>";
			} 
		else 
			{
    				echo "Error: " . $sql . "<br>" . $conn->error;

			}

	}	
}
?> 