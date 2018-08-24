<?php

include 'connection.php';
$name = $_POST["username"];
$password = $_POST["userpassword"];
$address = $_POST["useraddress"];
$phone = $_POST["userphone"];
$email = $_POST["useremail"];



$sel = "INSERT INTO user (username, password, email, phone, address)
values('$name','$password','$address','$email','$phone')";

if(mysqli_query($con, $sel)){

	echo "new record created sucess";
}else{
	echo "Error:" .$sql. "<br>" .mysqli_error($con);
}
mysqli_close($con);

?>