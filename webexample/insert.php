<?php
include 'connection.php';
$name = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sql = "Insert into user (username, password, email, phone)
values ('{$name}','{$password}','{$email}','{$phone}')
";
$r = mysqli_query($con,$sql);
$array = array();
$result = "user interested";
$array[]=$result;
header ('Content-Type: application/json');
echo json_encode($array);