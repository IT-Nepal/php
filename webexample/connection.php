<?php
$error = 'Error has been occured';
$con = mysqli_connect('localhost','root',''); //connection to the mysql server
mysqli_select_db($con,'Web') or die ($error); //select the particular database

?>