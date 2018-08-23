<?php
include 'connection.php';  //include connection file
$select = "Select * from user"; //select the all data of user table
$resultset = mysqli_query($con,$select);
$array = array();
while($row=mysqli_fetch_assoc($resultset)){
	$array[] = $row;
}
header('Content-Type: application/json');
echo json_encode($array);

?>
