<?php
$servername = "localhost";
$username = "root";
$ppassword = "";
$databasename = "Web";

$con = mysqli_connect($servername,$username,$ppassword,$databasename);
if(!$con){
	die("Connection failed:" .mysqli_connect_error());
}
?>