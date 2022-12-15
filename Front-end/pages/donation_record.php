<?php
session_start();
include_once "connect_database.php"
?>

<!DOCTYPE html>
<html>
<head>
<title>Donation list</title>
<style>
    .center {
        text-align:center
        
    }
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 70%;
    margin-left: auto;
    margin-right: auto;
	background-color: white;
}

td, th {
    border: 1px solid #050119;
    text-align: center;
    padding: 8px;
}

#button1 {
	padding: 5px 20px;
    background-color: #F9E79F;
    color: black;
    border: 2px solid #FEF9E7;
}
	
</style>

</head>


<body>
<br>
<?php
include_once"connect_database.php";
?>

<h1 style="padding-left:100px " class="center"> All Donation List </h1>
<br>
<table id="alumni">
<tr>
	<th>NO </th>
    <th> Name</th>
	<th> Matric Number</th>
	<th> Donation Title </th>
	<th > Donation Amount </th>
</tr>

<?php
$conn = db();
$sqlshow1 = "SELECT * FROM donation_data";
$result1 = $conn->query($sqlshow1);
$no = 1;
while ($row=$result1->fetch_assoc()){ ?>
	<tr>
	<td> <?=$no++ ?></td>
	<td><?=$row['name']?></td>
	<td><?=$row['al_mat_no']?></td>
	<td><?=$row['title']?></td>
    <td><?=$row['amount']?></td>
	</tr>
<?php };
$conn->close();
?>
<tr>
<td colspan="5" style= 'text-align:right'><a href="index.php"> Donate </a> </td>
</tr>
</table>
<br><br><br><br>

</body>
</html>