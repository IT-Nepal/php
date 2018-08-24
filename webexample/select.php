<?php
include 'connection.php';

$sel = "Select * from user";
$result = mysqli_query($con,$sel);
$values = array();
while($row = mysqli_fetch_assoc($result)){
	$values[] = $row;
}
echo json_encode($values); //convert our database file to the json format.
?>