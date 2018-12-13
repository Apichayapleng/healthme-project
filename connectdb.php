<?php

$hostname = 'localhost';
$user = 'root';
$password = '';
$dbname = 'mydb';


$conn = new mysqli($hostname, $user, $password, $dbname);

$sql = "INSERT INTO toi (data_id, weight, heigh, age) VALUES ('as123', '12', '13', '14')";
if($conn->connect_error){echo $conn->connect_error;}
else{echo 'We can cnoonect DB';}

?>