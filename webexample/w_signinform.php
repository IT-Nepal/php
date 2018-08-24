<!-- <?php
if(isset($_POST["password"])){
	$_name = $_POST["name"];
	$_email = $_POST["email"];
	$_phone = $_POST["phone"];
	$_address = $_POST["address"];
	$_password = $_POST["password"];

	include 'w_connection.php';
	$db = mysqli_select_db($con, "Web");
	$ins = "insert into user values('$_name','$_email','$_phone','$_address')";
	mysqli_query($con,$db,$ins);

	echo "ok";
}else{
	echo "error occured";
}
?> -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Web";

$_name = $_POST["username"];
	$_email = $_POST["email"];
	$_phone = $_POST["phone"];
	$_address = $_POST["address"];
	$_password = $_POST["password"];
//create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
if(!$con){
	die("Connection failed:" .mysqli_connect_error());
}
$sql = "INSERT INTO user (username, password, email, address, phone)
values ('$_name','$_password','$_email','$_address','$_phone')";

if(mysqli_query($con,$sql)){
	echo "new record created sucess";
}else{
	echo "Error:" .$sql. "<br>" .mysqli_error($con);
}
mysqli_close($con);
?>