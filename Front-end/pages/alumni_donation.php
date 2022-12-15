<?php
include_once "connect_database.php";
session_start();
if(isset($_POST['add_donation']))
{
    
	$title=$_REQUEST['title'];
	$desc=$_REQUEST['desc'];
	$amount=$_REQUEST['amount'];
	$name=$_REQUEST['name'];
	$mat_no=$_REQUEST['mat_no'];
	
   
	if ($title=='' || $desc=='' || $name==''|| $amount=='' || $mat_no=='')
	{
		echo "<br /><p class=p1>*****Incomplete information. No donation inserted.*****</p>";
	}
	else
	{
        $conn = db();
		$sql = "INSERT INTO donation_data (name, amount, title, description, al_mat_no) VALUES('$name', '$amount', '$title', '$desc', '$mat_no')";

		if ($conn->query($sql) === TRUE) 
		{
	    	echo "<br /><p class=p1>*****Donation successfully created.*****</p>";
			echo "<br /><p class=p2><a href=donation_record.php>View all Donation data</a></p>";
			} 
		else 
			{
    				echo "Error: " . $sql . "<br>" . $conn->error;
                   
			}
		
	}	
}
?>